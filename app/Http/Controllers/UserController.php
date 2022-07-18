<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    public function registervalidate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $data = $request->all();
        $check= $this->create($data);

        return redirect('login')->withSuccess('Signed in Successfully');


    }

    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

    }
    public function loginvalidate(Request $request){
            $request->validate([
                'email'=>'required',
                'password'=>'required'

            ]);

            $credentials = $request->only('email','password');


            if(Auth::attempt($credentials)){

                return redirect('order')->withSuccess('Login Success');
            }
            return back()->withErrors([
                'all'=>'The provided credentials does not match our records.'

            ]);
    }


}
