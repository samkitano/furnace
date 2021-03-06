<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Vat
 *
 * @mixin \Eloquent
 * @property int $id
 * @property float $tax
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vat whereUpdatedAt($value)
 */
class Vat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tax',
    ];
}
