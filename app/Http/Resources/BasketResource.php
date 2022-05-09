<?php

namespace App\Http\Resources;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

/**************
 * Class BasketResource
 * @package App\Http\Resources
 * @mixin Basket
 */
class BasketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'basket' => @$this->id,
            'count' => @$this->Products()->where('id', $this->product_id)->first()->pivot->count,
            'product' => ProductListResource::collection($this->Products),
        ];
    }
}
