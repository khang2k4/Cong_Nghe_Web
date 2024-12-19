<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    function renter()
    {
        return $this->belongsTo(renter::class, 'renter_id', 'id');
    }
}
