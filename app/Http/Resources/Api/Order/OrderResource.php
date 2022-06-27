<?php

namespace App\Http\Resources\Api\Order;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $customer_name
 * @property mixed $city
 * @property mixed $total
 * @property mixed $phone_no
 * @property mixed $status
 * @property mixed $payment_method
 * @property mixed $prescription
 * @property mixed $created_at
 *
 * @method proTags()
 */
class OrderResource extends JsonResource
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
            'customer_name' => $this->customer_name,
            'city' => $this->city,
            'total' => $this->total,
            'phone_no' => $this->phone_no,
            'status' => $this->status,
            'payment_method' => $this->payment_method,
            'prescription' => $this->prescription,
            'created_at' => $this->created_at,
        ];
    }
}
