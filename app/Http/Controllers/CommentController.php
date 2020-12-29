<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use Auth;
class CommentController extends Controller
{
    public function store(request $request, $post){
    	$this->validate($request, [
    		'comment' =>'required'
    	]);

    	$comm = new Comment();
    	$comm->user_id = Auth::id();
    	$comm->post_id = $post;
    	$comm->comment = $request->comment;
    	$comm->save();
    	return redirect()->back();
    }
}
