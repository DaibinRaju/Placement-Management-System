<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function login(Request $request)
    {

        $credentials = request()->validate([
            'admission_number' => 'required',
            'password' => 'required',
        ]);
        //Drive::create($validated_data);
        //return redirect('/admin');

        //$credentials = $request->only('email', 'password');
        //dd($credentials);
        // dd(Hash::make($credentials['password']).$credentials['password']);
        //dd(
        if (Auth::attempt(['admission_number' => $credentials['admission_number'], 'password' => $credentials['password']])) {
            // Authentication passed...
            //dd(=="student");
            switch (Auth::user()->role) {
                case "admin":
                    return redirect('/admin/drive');
                    break;

                case "student":
                    return redirect('/student');
                    break;

                case "hod":
                    return redirect('/hod');
                    break;

                case "faculty":
                    return redirect('/faculty');
                    break;
            }
        } else {
            return redirect('/')->with("error", "Incorrect credentials");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
