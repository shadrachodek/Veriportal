<?php

namespace App\Http\Resources\Document;

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
            'batch' => $this->batch,
            'owner' => $this->owner,
            'document' => $this->documentable,

        ];
    }
}
