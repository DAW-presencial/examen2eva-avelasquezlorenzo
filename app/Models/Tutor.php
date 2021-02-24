<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise',
        'documentType',
        'document',
        'name',
        'lastName',
        'lastName2',
        'country',
        'province',
        'municipality',
        'status',
        'phone',
        'email' 
    ];

    
}
