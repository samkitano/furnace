<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Subfamily
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $family_id
 * @property-read \App\Family $family
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily whereFamilyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subfamily whereUpdatedAt($value)
 */
class Subfamily extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'family_id',
        'name',
    ];

    /**
     * The attributes we want to describe for form abstraction
     *
     * @var array
     */
    public $indexable = [
        'name',
        'created_at',
    ];
    public $editable = [
        'name'
    ];
    public $creatable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }
}
