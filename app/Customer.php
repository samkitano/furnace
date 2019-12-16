<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Customer
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $title
 * @property string $zip
 * @property string $name
 * @property string $email
 * @property string $notes
 * @property string $mobile
 * @property string $address
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 * @property-read int|null $orders_count
 * @property \Illuminate\Database\Eloquent\Relations\HasMany $orders
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newModelQuery()
 */
class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'name',
        'address',
        'zip',
        'mobile',
        'email',
        'notes',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
