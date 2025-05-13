<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public function statusHistories()
{
    return $this->hasMany(\App\Models\CourierStatusHistory::class);
}

}
