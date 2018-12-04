<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'lga_lcda' => 'required|string|max:255',
            'nearest_bus_stop' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'email_address' => 'string|email|max:255',
        ];
    }
}
