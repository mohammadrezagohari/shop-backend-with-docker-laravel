<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Detail
 *
 * @property-read \App\Models\Product|null $Product
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $subject
 * @property string $value
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereValue($value)
 */
class Detail extends Model
{
    use HasFactory;
    #region Properties
    /******************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable = [
        'subject',
        'value'
    ];
    #endregion

    #region Relationship
    /******************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * این ارتباط چند به یک بین محصول و ویزگی های یک محصول می باشد
     */
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    #endregion
}
