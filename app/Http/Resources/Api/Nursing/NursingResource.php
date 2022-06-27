<?php

namespace App\Http\Resources\Api\Nursing;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $facility_Name
 * @property mixed $charges
 * @property mixed $Description
 * @property mixed $created_at
 */
class NursingResource extends JsonResource
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
            'name' => $this->facility_Name,
            'charges' => $this->charges,
            'description' => $this->Description,
            'created_at' => $this->created_at,
        ];
    }

}
