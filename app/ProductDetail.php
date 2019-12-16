<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\ProductDetail
 *
 * @mixin \Eloquent
 * @property int $h
 * @property int $w
 * @property int $l
 * @property int $id
 * @property int $weight
 * @property string $color
 * @property string $feature
 * @property int $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductDetail newModelQuery()
 */
class ProductDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'h',
        'w',
        'l',
        'weight',
        'color',
        'feature',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
