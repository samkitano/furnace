<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Order
 *
 * @mixin \Eloquent
 * @property int $id
 * @property float $vat
 * @property float $tax
 * @property string $zip
 * @property int $user_id
 * @property string $name
 * @property string $city
 * @property float $total
 * @property string $phone
 * @property string $email
 * @property string $notes
 * @property bool $shipped
 * @property float $untaxed
 * @property float $shipment
 * @property string $address
 * @property string $province
 * @property string $name_on_card
 * @property-read \App\User $user
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereNameOnCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereShipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereShipped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUntaxed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereVat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereZip($value)
 */
class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'email',
        'name',
        'address',
        'city',
        'province',
        'zip',
        'phone',
        'name_on_card',
        'untaxed',
        'vat',
        'shipment',
        'shipped',
        'total',
        'tax',
        'notes'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
