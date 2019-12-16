<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Unit
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Unit newModelQuery()
 */
class Unit extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
