<?php

namespace App\Http\Resources\Api\SubCategory;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $thumbnail
 * @property mixed $created_at
 * @property mixed $category_id
 */
class SubCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'category_id'   => $this->category_id,
            'name'          => $this->name,
            'thumbnail'     => $this->thumbnail,
            'created_at'    => $this->created_at,
        ];
    }
}
