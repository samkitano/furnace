<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\OrderProduct
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $quantity
 * @property int $order_id
 * @property int $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Relations\BelongsTo $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderProduct newModelQuery()
 */
class OrderProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
