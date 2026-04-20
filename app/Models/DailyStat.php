<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyStat extends Model
{
    protected $fillable = [
        'type',
        'stat_date',
        'qty',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'stat_date' => 'date',
    ];
}