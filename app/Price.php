<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Price
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $unit
 * @property float $price
 * @property int $product_id
 * @property int $supplier_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUpdatedAt($value)
 */
class Price extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'supplier_id',
        'price',
        'unit',
    ];
}
