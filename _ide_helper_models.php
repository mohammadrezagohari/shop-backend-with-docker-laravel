<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property-read \App\Models\Card|null $Card
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Query\Builder|Address onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Query\Builder|Address withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Address withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string $province
 * @property string $city
 * @property string $street
 * @property string $details
 * @property string $postal_code
 * @property string $card_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AddressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
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
 * @property int $count_custom
 * @property int|null $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BasketFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCountCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUserId($value)
 */
	class Basket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Card
 *
 * @property-read \App\Models\Address|null $Address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $Payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $Products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card newQuery()
 * @method static \Illuminate\Database\Query\Builder|Card onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Card query()
 * @method static \Illuminate\Database\Query\Builder|Card withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Card withoutTrashed()
 * @mixin \Eloquent
 * @property string $id
 * @property string $email
 * @property string $mobile
 * @property int $price
 * @property int $count_custom
 * @property int $status
 * @property int|null $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CardFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCountCustom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUserId($value)
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 */
	class Card extends \Eloquent {}
}

namespace App\Models{
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
	class Category extends \Eloquent {}
}

namespace App\Models{
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
	class Detail extends \Eloquent {}
}

namespace App\Models{
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
	class Payment extends \Eloquent {}
}

namespace App\Models{
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
	class Price extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $active
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Basket[] $Baskets
 * @property-read int|null $baskets_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $Products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 */
	class User extends \Eloquent {}
}

