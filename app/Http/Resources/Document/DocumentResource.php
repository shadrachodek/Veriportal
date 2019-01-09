<?php

namespace App\Http\Resources\Document;

use App\Http\Resources\BatchResource;
use App\Http\Resources\OwnerResource;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'mode' => $this->mode,
            'documentId' => $this->document_id,
            'printStatus' => $this->print_status,
            'reprint' => $this->reprint_counter,
            'status' => $this->status,
            'documentType' => $this->documentable_type,
            'batch' => new BatchResource( $this->batch ),
            'owner' => new OwnerResource( $this->owner ),
            'document' => $this->documentable,

        ];
    }
}
