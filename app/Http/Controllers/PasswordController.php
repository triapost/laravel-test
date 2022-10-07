<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        $passwords = Password::all();
        return view("passwords.index", compact("passwords"));
    }

    public function create()
    {
        return view("passwords.create");
    }

    public function store(Request $request)
    {

        Password::create($request->all());

        return redirect()->route("passwords.index");
    }

    public function edit(Password $password){

        return view("passwords.edit",compact("password"));

    }

    public function update(Password $password,Request $request){

        $password->update($request->all());
        return redirect()->route("passwords.index");

    }

    public function destroy(Password $password){
        $password->delete();
        return redirect()->route("passwords.index");

    }
}
