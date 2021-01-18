<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $fillable = [
        "vorname",
        "nachname",
        "street",
        "streetno",
        "zip",
        "ort",
        "email",
        "ankunft",
        "abreise",
        "telefonnummer",
        "verbleib"
    ];

}
