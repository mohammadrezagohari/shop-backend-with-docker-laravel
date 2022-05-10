<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $subject
 * @property string $context
 * @property int $visibility
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Card|null $Card
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $Categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $Detail
 * @property-read int|null $detail_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $Prices
 * @property-read int|null $prices_count
 * @property-read \App\Models\User $User
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereContext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVisibility($value)
 * @mixin \Eloquent
 * @property int $count_exist
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Detail[] $Details
 * @property-read int|null $details_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCountExist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product show()
 * @method static \Illuminate\Database\Eloquent\Builder|Product takeLast()
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Basket[] $Baskets
 * @property-read int|null $baskets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Card[] $Cards
 * @property-read int|null $cards_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product getFirst($id)
 */
class Product extends Model
{
    use HasFactory;

    #region Properties
    /******************************************************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable = [
        'subject',
        'context',
        'visibility',
        'count_exist',
    ];
    #endregion
    #region Relationship
    /************************************************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * این ارتباط یک به چند بین کاربر و محصولاتی که ثبت کرده است می باشد
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /************************************************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * این ارتباط چند به چند بین سفارش و محصولاتی که ثبت کرده است می باشد
     */
    /**********
     */
    public function Cards()
    {
        return $this->belongsToMany(Card::class);
    }

    /*************************************************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * این ارتباط چنند به چند بین سبد خرید و محصولاتی که انتخاب کرده است می باشد
     */
    public function Baskets()
    {
        return $this->belongsToMany(Basket::class)->withPivot('count');
    }

    /***************************************************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * این ارتباط چند به چند بین محصولات و دسته بندی های محصولات می باشد
     */
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /***********************************************************
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * این ارتباط یک به چند بین محصول و ویزگی های یک محصول می باشد
     */
    public function Details()
    {
        return $this->hasMany(Detail::class);
    }

    /************************************************************
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * این ارتباط یک به چند بین محصول و قیمت های یک محصول می باشد
     * نکته این می باشد که در این است که از طریق این جدول می توان به جدول قیمت هر محصول هم دسترسی داشت
     */
    public function Prices()
    {
        return $this->hasMany(Price::class);
    }
    #endregion

    #region Query
    /**********************************************
     * @param $query
     * @return mixed
     */
    public function scopeShow($query)
    {
        return $query->where('visibility', '=', 1);
    }

    /*******************************************
     * @param $query
     * @return mixed
     */
    public function scopeTakeLast($query)
    {
        return $query->take(10);
    }

    #endregion

}
