<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties=User::where('department_id',Auth::user()->department_id)
        ->where('role','faculty')
        ->get();
        return view('hod.faculty',compact('faculties'));
        
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
        $validated_data = request()->validate([
            'faculty_name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = User::create([
                'department_id'=>Auth::user()->department_id,
                'name' => $request->faculty_name,
                'admission_number' => $request->username,
                'password' => Hash::make($request->password),
                'role' => "faculty",
            ]);
            $faculty = Faculty::create([
                'faculty_name' => $request->faculty_name,
                'email' => $request->email,
                'user_id' => $user->id,
                'department_id' => Auth::user()->department_id,
            ]);
            return back()->with("success","Faculty user created");
        } catch (QueryException $e) {
            return back()->with("error",$e->errorInfo[2]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
