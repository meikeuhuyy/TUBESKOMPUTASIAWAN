<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;

    protected $fillable = [
        'intern_name',
        'responsible_name',
        'mentor_name',
        'division',
        'status'
    ];
}
