<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menadzer;

class Kuvar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'kuhinja',
        'plata',
        'menadzer_id'
    ];

    public function menadzer()
    {
        return $this->belongsTo(Menadzer::class);
    }
}
