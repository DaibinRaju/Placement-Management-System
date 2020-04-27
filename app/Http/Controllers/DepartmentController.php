<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\User;
use Illuminate\Support\Facades\Hash;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department= Department::all();
        //dd($department);
        return view('admin.department', compact('department'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data=request()->validate([
            'department_name'=>'required',
            'hod_name'=>'required',
            'username'=>'required',
            'password'=>'required',
        ]);

        $user=User::create([
            'name' =>$request->hod_name,
            'admission_number'=>$request->username,
            'password'=>Hash::make($request->password),
            'role' =>"hod",
        ]);

        

        Department::create([
            'department_name'=>$request->department_name,
            'user_id' =>$user->id,
        ]);
        return redirect('/admin/department');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::where('id', $id)->firstOrFail();
        $hod=User::where('id',$department->user_id)->firstOrFail();
        //dd($hod);
        return view('admin.departmentshow', compact('department','hod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $department = Department::find($id);
        if ($department) {
            $department->delete();
        }
        return back();
    }
}
