<?php

namespace App\Http\Resources\Api\Cart;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if(isset($this->medicine)){
            return [
                'id' => $this->id,
                'name' => $this->medicine->Medicine_Name ?? '',
                'price' => $this->medicine->Price ?? '',
                'image' => $this->medicine->thumbnail ?? '',
                'type' => 1,
                'created_at' => $this->created_at,
            ];
        }
        else if(isset($this->nursing)){
            return [
                'id' => $this->id,
                'name' => $this->nursing->facility_Name ?? '',
                'price' => $this->nursing->charges ?? '',
                'image' => $this->nursing->thumbnail ?? '',
                'type' => 2,
                'created_at' => $this->created_at,
            ];
        }else{
            return [
                'id' => '',
                'name' => '',
                'price' => '',
                'image' => '',
                'type' => '',
                'created_at' => '',
            ];
        }
    }
}
