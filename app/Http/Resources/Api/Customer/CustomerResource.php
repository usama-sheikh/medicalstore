<?php

namespace App\Http\Resources\Api\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $address
 * @property mixed $city
 * @property mixed $mobile
 * @property mixed $email
 * @property mixed $created_at
 * @property mixed $Customer_name
 */
class CustomerResource extends JsonResource
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
            'name' => $this->Customer_name,
            'address' => $this->address,
            'city' => $this->city,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'created_at' => $this->created_at,
        ];
    }
}
