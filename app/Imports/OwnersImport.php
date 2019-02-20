<?php

namespace App\Imports;

use App\Model\Owner;
use Maatwebsite\Excel\Concerns\ToModel;
use Keygen\Keygen;

class OwnersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Owner([
            'full_name'     => $row[1],
            'owner_id'    => Keygen::numeric(10)->generate(),
        ]);
    }
}
