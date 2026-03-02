<?php
// app/Http/Requests/ComputerRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'customer_id' => 'required|exists:customers,id',
            'brand' => 'required|string',
            'model' => 'nullable|string',
            'cpu' => 'nullable|string',
            'ram' => 'nullable|string',
            'storage' => 'nullable|string',
            'gpu' => 'nullable|string',
            'os' => 'nullable|string',
            'price' => 'nullable|integer',
            'bought_at' => 'nullable|date',
            'note' => 'nullable|string',
        ];
    }
}
