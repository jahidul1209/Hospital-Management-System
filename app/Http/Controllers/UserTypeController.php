<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertype;
class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $usertype = Usertype::all();
        return view ('usertype.index',compact('usertype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('usertype.create');
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
        'typename' => $request['typename'],
        ];

        $added =  Usertype::create($data);
          if($added){
                $notification=array(
                    'message' => 'Add Successfully',
                    'alert-type' =>'success'
                );
                return redirect()->route('usertype.index')->with($notification);
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
       $edit_type = Usertype::find($id);
       return view('usertype.edit', compact('edit_type'));
       return redirect()->route('usertype.index');
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
      Usertype::where('id', $id)->update($request->all());
       return redirect()->route('usertype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = Usertype::find($id);
          $delete->delete();
          return redirect()->back();
    }
}
