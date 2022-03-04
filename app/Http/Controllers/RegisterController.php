<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attr=request()->validate([
            'name'=>'required|min:5',
            'user_name'=>'required',
            'password'=>'required',
            'email'=>'required|email|unique:users,email'
        ]);
        $user=User::create($attr);
        auth()->login($user);
        session()->flash('success','your account has been created');
        return redirect('/');
    }

}
