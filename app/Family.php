<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Family
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read int|null $subfamilies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subfamily[] $subfamilies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Family whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Family extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
    public $indexable = [
        'name',
        'description',
        'created_at'
    ];
    public $editable = [
        'name',
        'description',
    ];
    public $creatable = [
        'name',
        'description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subfamilies(): HasMany
    {
        return $this->hasMany(Subfamily::class);
    }
}
