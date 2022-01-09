<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menadzer;

class Kuvar extends Model
{
    use HasFactory;

    public function menadzer()
    {
        return $this->belongsTo(Menadzer::class);
    }
}
