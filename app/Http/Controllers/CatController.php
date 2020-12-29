<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postcategorie;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $category = Postcategorie::all();

        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = [      
        'cat_name' => $request['cat_name'],
        ];

        $added =  Postcategorie::create($data);
          if($added){
                $notification=array(
                    'message' => 'Add Successfully',
                    'alert-type' =>'success'
                );
                return redirect()->route('category.index')->with($notification);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit_cat = Postcategorie::find($id);
       return view('category.edit', compact('edit_cat'));
       return redirect()->route('category.index');
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
               Postcategorie::where('id', $id)->update($request->all());
       return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delete = Postcategorie::find($id);
          $delete->delete();
          return redirect()->back();
    }
}
