<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Basket
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $Products
 * @property-read int|null $products_count
 * @property-read \App\Models\User|null $User
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newQuery()
 * @method static \Illuminate\Database\Query\Builder|Basket onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket query()
 * @method static \Illuminate\Database\Query\Builder|Basket withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Basket withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BasketFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUserId($value)
 * @property string $cookie_identity
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCookieIdentity($value)
 */
class Basket extends Model
{
    use HasFactory, SoftDeletes;
    #region Properties
    /******************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable = ['cookie_identity'];
    #endregion
    #region Relationship

    /*******************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * این ارتباط یک چند بین سبد خرید و محصولات است
     */
    public function Products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count');
    }

    /******************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * این ارتباط چند به یک بین کاربر و سبد خرید ها می باشد
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    #endregion
}
