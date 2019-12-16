<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Title
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Title query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Title newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Title newModelQuery()
 */
class Title extends Model
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
    ];
}
