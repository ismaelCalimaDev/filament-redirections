<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirection extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'target',
        'is_active',
    ];
}
