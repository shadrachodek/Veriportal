<?php

namespace App\Http\Resources\Document;

use App\Http\Resources\BatchResource;
use App\Http\Resources\OwnerResource;

use Illuminate\Http\Resources\Json\JsonResource;

class ApprovalDocumentResource extends JsonResource
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
            'status' => $this->status,
            "setApprovalBy" => $this->set_for_approval_by,
            "setApprovalOn" => $this->set_for_approval_at,
            "approvalStatus" => $this->set_for_approval_status,
            'documentType' => $this->documentable_type,
            'batch' => new BatchResource( $this->batch ),
            'owner' => new OwnerResource( $this->owner ),
            'document' => $this->documentable,

        ];
    }
}
