<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserElegible extends Model
{
    use HasFactory;

    protected $fillable = [
        'mrcb',
        'headname',
        'contactno',
        'token',
    ];
}
