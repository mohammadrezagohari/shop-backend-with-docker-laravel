<?php

namespace App\Repositories\BasketRepository;

use App\Models\Basket;
use App\Models\User;
use http\Client\Response;

interface IEloquentBasketRepository
{
    public function index();

    public function addItem($productId, $count, $userId = null, $identity = null);

    public function allItems();

    public function selectItem($id);

    public function deleteItem($id);

    public function checkPolicy(User $user, Basket $basket);

    public function setCookie($identity);
}
