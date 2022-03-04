<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','goodby');
    }
    public function create(){
        return view('sessions.create');
    }
    public function store(){
        $attr=request()->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);
        if (auth()->attempt($attr)){
            session()->regenerate();
            return redirect('/')->with('success','welcome back amoooooooooo!');
        }
        return back()
            ->withInput()
            ->withErrors(['email'=>'there is no user with this info']);
    }
}
