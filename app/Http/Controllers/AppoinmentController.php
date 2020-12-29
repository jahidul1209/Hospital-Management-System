<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoinment;
class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $appoinment = Appoinment::all();

        return view('appoinment.index', compact('appoinment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'f_name' => $request['f_name'],
        'l_name' => $request['l_name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'description' => $request['description'],
       ];
        $added =  Appoinment::create($data);
          if($added){
                $notification=array(
                    'message' => 'Add Successfully',
                    'alert-type' =>'success'
                );
                return redirect()->back()->with($notification);
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
        $appoinment = Appoinment::find($id);
        return view('appoinment.show', compact('appoinment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = Appoinment::find($id);
          $delete->delete();
          return redirect()->back();
    }
}
