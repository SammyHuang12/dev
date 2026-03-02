<?php
// app/Models/Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'note'
    ];

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}
