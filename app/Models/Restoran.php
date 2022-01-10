<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menadzer;

class Restoran extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'grad',
        'kapacitet'
    ];

    public function menadzeri()
    {
        return $this->hasMany(Menadzer::class);
    }
}
