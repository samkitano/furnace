<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Supplier
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $web
 * @property string $nif
 * @property string $fax
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $mobile
 * @property string $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read int|null $salesmen_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newQuery()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Salesman[] $salesmen
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereNif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereWeb($value)
 */
class Supplier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nif',
        'address',
        'phone',
        'mobile',
        'fax',
        'email',
        'web',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesmen(): HasMany
    {
        return $this->hasMany(Salesman::class);
    }
}
