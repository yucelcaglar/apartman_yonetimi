<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gider_kalemleri extends Model
{
    use HasFactory;
    protected $hidden = [
        'remember_token',
    ];
    protected $guarded = [];
}
