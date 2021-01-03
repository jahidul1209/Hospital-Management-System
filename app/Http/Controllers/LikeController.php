<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
class LikeController extends Controller
{
       public function like($post_id){
       $post_id = $post_id;
       $user_id = Auth::user()->id;
       $like = new Like();
       $like->post_id = $post_id;
       $like->user_id = $user_id;
       // $like->comment_id = $post_id;
       $like->like= 1;
       $like->save();
         return redirect()->back()
      						->with('mess' , 'You liked This');
    }
}
