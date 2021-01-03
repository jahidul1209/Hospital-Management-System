<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','author','details','photo','category','role'
        ];


        public function comments()
        {
        	return $this->hasMany('App\Models\Comment');
        }
        public function user()
        {
        	return $this->hasMany('App\Models\User');
        }
      public function usertype()
        {
        	return $this->hasMany('App\Models\Usertype');
        }
}
