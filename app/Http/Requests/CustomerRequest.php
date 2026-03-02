<?php
// app/Http/Requests/CustomerRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'   => 'required|string|max:255',
            'phone'  => 'nullable|string',
            'email'  => 'nullable|email',
            'address'=> 'nullable|string',
            'note'   => 'nullable|string',
        ];
    }
}