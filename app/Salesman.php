<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Salesman
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property string $notes
 * @property string $mobile
 * @property int $supplier_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Supplier $supplier
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salesman query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salesman newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Salesman newModelQuery()
 */
class Salesman extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'supplier_id',
        'mobile',
        'email',
        'notes',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
