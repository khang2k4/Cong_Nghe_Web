<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    public function computer()
    {
        return $this->belongsTo(computer::class, 'computer_id', 'id');
    }
}
