<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appoinment;
use App\Models\Post;
use App\Models\Postcategorie;
use DB;
use App\Models\User;
use Auth;
use App\Models\Usertype;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view ('post.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'author' => 'required',
            'photo' => 'required',
            'category' => 'required',
            'details' => 'required',
            // 'role' => 'required',
        ]);

        
        $post = new Post();
        $post->title = $request->title;
           $post->category = $request->category;
        $post->author = Auth::user()->name;
        $post->details = $request->details;
        $post->role = Auth::user()->user_type;
       if($request->hasfile('photo')){
            $path = $request->file('photo');
            $ext=strtolower($path->getClientOriginalExtension());
            $image_full_name =time().'.'.$ext;
            $upload_path= 'public/image/';
            $path->move($upload_path,$image_full_name);
            $post->photo = $image_full_name;
        }else{
            return $request;
             $post->photo = ' ';
        }
            $post->save();
            return redirect()->route('post.index')
                            ->with('success','Post has been created successfully.');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit_pst = Post::find($id);
       return view('post.edit', compact('edit_pst'));
       return redirect()->route('post.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $post->title = $request->title;
          $post->category = $request->category;
        $post->author = $request->author;
        $post->details = $request->details;
        if($request->hasfile('photo')){
             $path = $request->file('photo');
            $ext=strtolower($path->getClientOriginalExtension());
            $image_full_name =time().'.'.$ext;
            $upload_path= 'public/image/';
            $path->move($upload_path,$image_full_name);
            $update = $post->photo = $image_full_name;
        }
            $post->update();
            return redirect()->route('post.index');
                         
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = Post::find($id);
          $delete->delete();
          return redirect()->back();
    }
        public function details($post)
    {
           $posts = Post::find($post);
           $allcategory = Postcategorie::all();
            $allpost = Post::all();
         return view('single-page',compact('posts','allcategory','allpost'));
    }

}
