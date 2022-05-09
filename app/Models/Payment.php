<?php

namespace App\Models;

use App\Models\Base\UniqueIdentity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Payment
 *
 * @property-read \App\Models\Card|null $Card
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Payment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Query\Builder|Payment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Payment withoutTrashed()
 * @mixin \Eloquent
 * @property string $id
 * @property string $bank_name
 * @property string $tracking_code
 * @property int $price
 * @property int $status
 * @property string $card_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTrackingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 */
class Payment extends Model
{
    use HasFactory,UniqueIdentity,SoftDeletes;
    #region Properties
    /******************
     * @var string[]
     * all of them are properties in database
     */
    protected $fillable=['bank_name','tracking_code','price','status'];
    #endregion
    #region Relationship
    /******************************
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * این ارتباط یک به چند بین سفارش و پرداختی ها می باشد
     */
    public function Card()
    {
        return $this->belongsTo(Card::class);
    }
    #endregion
}
