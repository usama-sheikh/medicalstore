<?php

namespace App\Http\Resources\Api\Order;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $order_id
 * @property mixed $medicine_id
 * @property mixed $Qantity
 * @property mixed $Price
 * @property mixed $created_at
 * @property mixed $medicine
 *
 * @method proTags()
 * @method medicine()
 */
class OrderDetailRecourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        if(isset($this->medicine)){
            return [
                'id' => $this->id,
                'order_id' => $this->order_id,
                'medicine_name' => $this->medicine->Medicine_Name,
                'quantity' => $this->Qantity,
                'price' => $this->Price,
                'created_at' => $this->created_at,
            ];
        }
        else if(isset($this->nursing)){
            return [
                'id' => $this->id,
                'order_id' => $this->order_id,
                'item_name' => $this->nursing->facility_Name,
                'quantity' => $this->Qantity,
                'price' => $this->charges,
                'created_at' => $this->created_at,
            ];
        }else{
            return [
                'id' => '',
                'order_id' => '',
                'item_name' => '',
                'quantity' => '',
                'price' => '',
                'created_at' => '',
            ];
        }
    }
}
