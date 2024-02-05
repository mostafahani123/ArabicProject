<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'governorate',
        'region',
        'address',
        'phone_number',
        'whatsapp_number',
        'urlStore',
        'email',
        'workingScops',
        'description',
        'imageCard',
    ];

}
