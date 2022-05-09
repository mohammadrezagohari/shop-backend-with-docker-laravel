<?php


namespace App\Repositories\BasketRepository;


use App\Http\Resources\BasketResource;
use App\Models\Basket;
use App\Models\User;
use Illuminate\Support\Str;

class EloquentBasketRepository implements IEloquentBasketRepository
{
    public function index()
    {

    }

    public function addItem($productId, $count, $user = null, $identity = null)
    {
        if (!$this->checkPolicy($user, $identity)) {
            $identity = Str::uuid();
        }
        $basket = new Basket;
        $this->setCookie($identity);
        $basket->cookie_identity = $identity;
        $basket->user_id = @$user ? $user->id : null;
        $basket->save();
        $basket->Products()->syncWithPivotValues([$productId], ['count' => $count]);
        $basket->product_id = $productId;
        return $basket;
    }


    public function allItems()
    {
        //// get current user session
        $sessionId = session()->getId();
        /// are you added item in your basket without login?!
        $basketSessionCount = Basket::whereCookieIdentity($sessionId)->count();
        /// are you added item in your basket with authentication
        $basketAuthUserCount = \Auth::user() ? Basket::whereUserId(\Auth::user()->id)->count() : null;

        if (!@$basketAuthUserCount && !@$basketSessionCount)
            return null;

        if (@$basketAuthUserCount)
            return BasketResource::collection(Basket::whereUserId(\Auth::user()->id)->get());

        if (@$basketSessionCount)
            return BasketResource::collection(Basket::whereCookieIdentity($sessionId)->get());
    }

    public function selectItem($id)
    {
        return Basket::findOrFail($id);
    }

    public function deleteItem($id)
    {
        $basket = Basket::findOrFail($id);
        return $basket->delete();
    }

    public function checkPolicy(User $user = null, $identityCookie)
    {
        /// are you added item in your basket without login?!
        $BasketIdentityCookie = Basket::whereCookieIdentity($identityCookie)->count();
        /// are you added item in your basket with authentication?
        $basketAuthUserCount = @$user != null ? Basket::whereUserId($user->id)->count() : null;

        if (@$basketAuthUserCount)
            return true;

        if (@$BasketIdentityCookie)
            return true;

        return false;
    }

    public function setCookie($identity)
    {
        $cookie_name = "identity";
        setcookie($cookie_name, $identity, time() + (86400 * 30), "/");
    }


}
