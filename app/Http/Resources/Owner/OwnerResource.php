<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            'ownerId' => $this->owner_id,
            'fullName' => $this->full_name,
            'dateOfBirth' => $this->date_of_birth,
            'maritalStatus' => $this->marital_status,
            'occupation' => $this->occupation,
            'address' => $this->address,
            'city' => $this->city,
            'lgaLcda' => $this->lga_lcda,
            'nearestBusStop' => $this->nearest_bus_stop,
            'telephone' => $this->telephone,
            'mobile' => $this->mobile,
            'emailAddress' => $this->email_address,
            "passport_one" =>  $this->passport ? $this->passport->passport_one : null,
            "passport_two" =>  $this->passport ? $this->passport->passport_two : null,
            "signature" =>  $this->signature ? $this->signature->file : null,

          //  'documents' => $this->documents


        ];
    }
}
