<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    public function medicine()
    {
        return $this->belongsTo(medicines::class, 'medicine_id', 'id');
    }
}
