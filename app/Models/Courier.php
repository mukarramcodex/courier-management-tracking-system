<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $fillable = [
    'tracking_number',
    'sender_name',
    'receiver_name',
    'origin',
    'destination',
    'weight',
    'rate',
    'status',
    ];
}
