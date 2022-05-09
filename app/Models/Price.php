<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Price
 *
 * @property-read \App\Models\Product|null $Product
 * @method static \Illuminate\Database\Eloquent\Builder|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price newQuery()
 * @method static \Illuminate\Database\Query\Builder|Price onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Price query()
 * @method static \Illuminate\Database\Query\Builder|Price withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Price withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property int $amount
 * @property int $discount
 * @property int $amount_show
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereAmountShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereUpdatedAt($value)
 * @method static \Database\Factories\PriceFactory factory(...$parameters)
 */
class Price extends Model
{
    use HasFactory,SoftDeletes;
    #region Properties
    /******************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable = [
        'amount',
        'discount',
        'amount_show',
    ];
    #endregion

    #region Relationship
    /******************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * این ارتباط چند به یک بین محصول و قیمت محصول می باشد
     */
    /************
     */
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    #endregion
}
