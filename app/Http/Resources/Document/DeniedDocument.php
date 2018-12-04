<?php

namespace App\Http\Resources\Document;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BatchResource;
use App\Http\Resources\OwnerResource;

class DeniedDocument extends JsonResource
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
            'reason' => $this->message,
            'approvedBy' => $this->getFullName(),
            'approvedAt' => $this->approved_at,
            'documentType' => $this->documentable_type,
            'batch' => new BatchResource( $this->batch ),
            'owner' => new OwnerResource( $this->owner ),
            'document' => $this->documentable,
        ];
    }
}
