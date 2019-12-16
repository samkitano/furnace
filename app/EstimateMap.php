<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\EstimateMap
 *
 * @mixin \Eloquent
 * @property int $w
 * @property int $l
 * @property int $h
 * @property int $id
 * @property int $unit
 * @property float $price
 * @property int $quantity
 * @property int $order_id
 * @property int $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Relations\BelongsTo $estimate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstimateMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstimateMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstimateMap newModelQuery()
 */
class EstimateMap extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'w',
        'l',
        'h',
        'quantity',
        'unit',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estimate(): BelongsTo
    {
        return $this->belongsTo(Estimate::class);
    }
}
