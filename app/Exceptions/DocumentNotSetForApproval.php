<?php

namespace App\Exceptions;

use Exception;

class DocumentNotSetForApproval extends Exception
{
    public function render()
    {
        return [
            'data' => "Document is yet to be verified for Approval"
        ];
    }
}
