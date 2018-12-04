<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BatchResource extends JsonResource
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
            'batchId' => $this->batch_id,
            'batchMax' => $this->batch_max,
            'numberOfDocument' => $this->number_of_document,
            'status' => $this->status,
            'createdAt' => $this->created_at,
        ];
    }
}
