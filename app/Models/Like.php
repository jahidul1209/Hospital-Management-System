<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_id','post_id','like', 
        ];

        public function post()
        {
        	return $this->belongsTo('App\Models\Post');
        }
        public function user()
        {
        	return $this->belongsTo('App\Models\User');
        }
        public function comments()
        {
        	return $this->belongsTo('App\Models\Comment');
        }
}
