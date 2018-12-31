<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Storage;

class OwnerCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ownerId' => $this->owner_id,
            'firstName' => $this->first_name,
            'middleName' => $this->middle_name,
            'lastName' => $this->last_name,
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
            "passport" =>  $this->passport ? Storage::url('passport/'.$this->passport->file) : null,
            "signature" =>  $this->signature ? $this->signature->file : null,
        ];
    }
}
