<?php

namespace App\Http\Resources\Api\Variant;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $thumbnail
 * @property mixed $created_at
 * @property mixed $category_id
 * @property mixed $product_id
 * @property mixed $size_id
 * @property mixed $price
 * @property mixed $display_price
 * @property mixed $display_discount_price
 * @property mixed $stock
 */
class VariantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'size_id' => $this->size_id,
            'name' => $this->name,
            'price' => $this->price,
            'display_price' => $this->display_price,
            'display_discount_price' => $this->display_discount_price,
            'stock' => $this->stock,
            'created_at' => $this->created_at,
        ];
    }
}
