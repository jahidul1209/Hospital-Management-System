<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{

    public function index()
    {
       $employee = Employee::all();

        return view('employee.index', compact('employee'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
       $data = [      
        'name' => $request['name'],
        'age' => $request['age'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'DoB' => $request['DoB'], 
        'role' => $request['role'],
        'about' => $request['about'],
        'address' => $request['address'],
        'details' => $request['details'],
       ];
        $added =  Employee::create($data);
          if($added){
                $notification=array(
                    'message' => 'Add Successfully',
                    'alert-type' =>'success'
                );
                return redirect()->route('employee.index')->with($notification);
            }
    }

    public function show($id)
    {
         $employee = Employee::find($id);
        return view('employee.show', compact('employee'));
    }

    public function edit($id)
    {
        $edit_emp = Employee::find($id);
       return view('employee.edit', compact('edit_emp'));
       return redirect()->route('employee.index');
    }


    public function update(Request $request, $id)
    {
       Employee::where('id', $id)->update($request->all());
       return redirect()->route('employee.index');
    }


    public function destroy($id)
    {
      
         $delete = Employee::find($id);
          $delete->delete();
          return redirect()->back();
    }
}
