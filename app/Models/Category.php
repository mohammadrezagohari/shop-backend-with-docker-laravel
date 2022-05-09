<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $Products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $subject
 * @property int $base_of_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBaseOfOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
class Category extends Model
{
    use HasFactory;

    #region Properties
    /******************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable = ['subject', 'base_of_order'];
    #endregion
    #region Relationship
    /*************************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * این ارتباط چند به چند بین محصولات و دسته بندی های محصولات می باشد
     */
    public function Products()
    {
        return $this->belongsToMany(Product::class);
    }
    #endregion
}
