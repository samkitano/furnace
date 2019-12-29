<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Estimate
 *
 * @mixin \Eloquent
 * @property int $id
 * @property float $tax
 * @property float $vat
 * @property float $total
 * @property string $notes
 * @property string $title
 * @property int $deadline
 * @property float $untaxed
 * @property float $shipping
 * @property int $customer_id
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read int|null $details_count
 * @property-read \Illuminate\Database\Eloquent\Relations\HasMany $details
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereUntaxed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Estimate whereVat($value)
 */
class Estimate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'title',
        'description',
        'notes',
        'deadline',
        'untaxed',
        'shipping',
        'vat',
        'total',
        'tax',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details(): HasMany
    {
        return $this->hasMany(EstimateMap::class);
    }
}
