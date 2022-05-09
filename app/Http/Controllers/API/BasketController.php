<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasketStoreRequest;
use App\Http\Resources\BasketResource;
use App\Repositories\BasketRepository\IEloquentBasketRepository;

class BasketController extends Controller
{
    /**
     * @var IEloquentBasketRepository
     */
    protected $IEloquentBasketRepository;

    public function __construct(IEloquentBasketRepository $IEloquentBasketRepository)
    {
        $this->IEloquentBasketRepository = $IEloquentBasketRepository;
    }

    public function CustomerIndex()
    {
        $result = $this->IEloquentBasketRepository->allItems();
        if (@$result == null)
            return response()->json(['message' => 'your basket is empty']);
        return BasketResource::collection($result);
    }

    public function CustomerStore(BasketStoreRequest $request)
    {
        $user = @\Auth::user() ? \Auth::user() : null;
        $result = $this->IEloquentBasketRepository
            ->addItem($request->product, $request->count, $user, $request->cookie('identity'));

        if (@$result == null)
            return response()->json(['message' => 'your basket is empty']);
        return BasketResource::make($result);
    }

    public function show($id)
    {
        $result = $this->IEloquentBasketRepository->selectItem($id);
        $this->authorize('viewAny', $result);
        return BasketResource::make($result);
    }

    public function deleteItem($id)
    {
        $result = $this->IEloquentBasketRepository->deleteItem($id);
    }
}
