<?php

namespace App\Http\Resources\Api\Medicine;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $Medicine_Name
 * @property mixed $Generic_Name
 * @property mixed $Medicine_Formula
 * @property mixed $Company
 * @property mixed $Price
 * @property mixed $Description
 * @property mixed $category
 * @property mixed $created_at
 * @property mixed $thumbnail
 * @method proTags()
 */
class MedicinesResource extends JsonResource
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
            'Medicine_Name' => $this->Medicine_Name,
            'Generic_Name' => $this->Generic_Name,
            'Medicine_Formula' => $this->Medicine_Formula,
            'Company' => $this->Company,
            'Price' => $this->Price,
            'Description' => $this->Description,
            'category' => $this->category,
            'image' => $this->thumbnail,
            'created_at' => $this->created_at,
        ];
    }
}
