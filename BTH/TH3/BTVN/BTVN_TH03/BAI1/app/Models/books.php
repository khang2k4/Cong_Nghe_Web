<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public function library()
    {
        return $this->belongsTo(libraries::class, 'library_id', 'id');
    }
}
