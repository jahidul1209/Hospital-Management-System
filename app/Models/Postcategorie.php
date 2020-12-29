<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        ];
}
