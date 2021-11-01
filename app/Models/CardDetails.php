<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 'name', 'image', 'student_id', 'roll', 'class', 'section', 'year'
    ];
}
