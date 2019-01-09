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
            "canPrint" => $this->can_print,
            "setApprovalBy" => $this->getFullName(),
            "setApprovalOn" => $this->set_for_approval_at,
            "approvalStatus" => $this->set_for_approval_status,
            "approvedStatus" => $this->approved_status,
            "approvedBy" => $this->getFullName(),
            "approvedAt"=> $this->approved_at,
            'reason' => $this->message,
            'documentType' => $this->documentable_type,
            'batch' => new BatchResource( $this->batch ),
            'owner' => new OwnerResource( $this->owner ),
            'document' => $this->documentable,
        ];
    }
}
