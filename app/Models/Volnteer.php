<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volnteer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'volunteer_name',
        'category_id',
        'description',
        'price',
        'price',
        'main_picture',
    ];

}
