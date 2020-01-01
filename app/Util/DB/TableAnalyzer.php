<?php

namespace App\Util\DB;

use Illuminate\Support\Str;

class TableAnalyzer
{
    /** @var object */
    protected $model;

    /** @var string */
    protected $table = '';

    /** @var array */
    protected $sql = [];
    protected $columns = [];
    protected $descriptor = [];

    /** @var bool */
    protected $onlyFillable = false;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @param string|null $table
     *
     * @return array
     */
    public function describe(string $table = null): array
    {
        $this->setTable($table)
             ->setTableColumns($this->onlyFillable)
             ->setSql()
             ->getDescription();

        return $this->descriptor;
    }

    /**
     * @return $this
     */
    public function setOnlyFillable()
    {
        $this->onlyFillable = true;

        return $this;
    }

    /**
     * Set table name for the current model.
     * Default will be Laravel's default.
     * Overwrite by passing the $name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setTable(string $name = null)
    {
        $this->table = $name ?? $this->getDefaultTableName();

        return $this;
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * Get the sql clause that builds the table.
     *
     * @return $this
     */
    protected function setSql()
    {
        $sql = \DB::select(
            'select sql from sqlite_master where name = :name',
            ['name' => $this->table]
        );

        $this->sql = $this->arrayalize($sql[0]->sql);

        return $this;
    }

    /**
     * Transform the sql clause into an array
     * we can inspect properly.
     *
     * @param string $sql
     *
     * @return array
     */
    protected function arrayalize(string $sql): array
    {
        $arr = [];
        $res = [];

        preg_match('#\(((?:[^\(\)]++|(?R))*)\)#', $sql, $match);

        $cols = explode(',', $match[1]);

        foreach ($cols as $col) {
            $str = str_replace('not null', 'not_null', $col);
            $str = trim(str_replace('"', '', $str));
            $arr[] = explode(' ', $str);
        }

        foreach ($arr as $item) {
            $key = array_shift($item);
            $res[$key] = $item;
        }

        return $res;
    }

    /**
     * Get all columns description
     */
    protected function getDescription()
    {
        foreach ($this->columns as $column) {
            $this->descriptor[$column] = [
                'label' => $this->getColumnLabel($column),
                'type' => $this->getColumnType($column),
                'required' => in_array('not_null', $this->sql[$column]),
                'indexable' => in_array($column, $this->model->indexable),
                'creatable' => in_array($column, $this->model->creatable),
                'editable' => in_array($column, $this->model->editable),

            ];
        }
    }

    /**
     * Get a suitable lable for the column
     *
     * @param string $columnName
     *
     * @return string
     */
    protected function getColumnLabel(string $columnName): string
    {
        if ($columnName === 'created_at') {
            return 'Created';
        }

        if ($columnName === 'updated_at') {
            return 'Updated';
        }

        return Str::ucfirst($columnName);
    }

    /**
     * Get a suitable type for the column
     *
     * @param string $column
     *
     * @return string
     */
    protected function getColumnType(string $column): string
    {
        $type = $this->sql[$column][0];

        switch ($type) {
            case 'varchar':
                return 'text';
            case 'varchar' && $column === 'email':
                return 'email';
            case 'varchar' && $column === 'password':
                return 'password';
            case 'integer':
                return 'number';
            case 'tinyint(1)':
                return 'checkbox';
            case 'datetime':
                return 'datetime-local';
            case 'timestamp':
                return 'string';
            case 'date':
                return 'date';
            case 'time':
                return 'time';
            case 'enum':
                return 'select';
            default:
                return 'text';
        }
    }

    /**
     * Get a Laravel-ish table name based on model name.
     *
     * @return string
     */
    protected function getDefaultTableName(): string
    {
        return strtolower(Str::plural(class_basename($this->model)));
    }

    /**
     * @param bool $onlyFillable
     *
     * @return $this
     */
    protected function setTableColumns(bool $onlyFillable)
    {
        $this->columns = $onlyFillable ? $this->getFillable() : $this->getTableColumns();

        return $this;
    }

    /**
     * Get the model's fillable attributes
     *
     * @return array
     */
    protected function getFillable(): array
    {
        return method_exists($this->model, 'getFillable')
            ? $this->model->getFillable()
            : [];
    }

    /**
     * @return array
     */
    protected function getTableColumns(): array
    {
        return \Schema::getColumnListing($this->table);
    }

    /**
     * Get the model's primary key.
     * Laravel's default is 'id'
     *
     * @return string
     */
    protected function getPk(): string
    {
        if (method_exists($this->model, 'getKeyName')) {
            return $this->model->getKeyName();
        }

        return 'id';
    }
}
