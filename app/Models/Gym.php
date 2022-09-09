<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function machines()
    {
        return $this->belongsToMany(Machine::class);
    }
}
