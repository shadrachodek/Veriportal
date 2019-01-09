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
            "canPrint" => $this->can_print,
            "setApprovalBy" => $this->set_for_approval_by,
            "setApprovalOn" => $this->set_for_approval_at,
            "approvalStatus" => $this->set_for_approval_status,
            "approvedStatus" => $this->approved_status,
            "approvedBy" => $this->approved_by,
            "approvedAt"=> $this->approved_at,
            'documentType' => $this->documentable_type,
            'batch' => new BatchResource( $this->batch ),
            'owner' => new OwnerResource( $this->owner ),
            'document' => $this->documentable,

        ];
    }
}
