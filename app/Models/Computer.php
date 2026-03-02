<?php
// app/Models/Computer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'customer_id',
        'brand',
        'model',
        'cpu',
        'ram',
        'storage',
        'gpu',
        'os',
        'price',
        'bought_at',
        'note'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
