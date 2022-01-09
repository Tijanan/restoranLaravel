<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restoran;
use App\Models\Kuvar;

class Menadzer extends Model
{
    use HasFactory;

    public function restoran()
    {
        return $this->belongsTo(Restoran::class);
    }

    public function kuvari()
    {
        return $this->hasMany(Kuvar::class);
    }
}
