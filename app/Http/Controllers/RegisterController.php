<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'register',
        ]);
    }

    public function store(Request $request)
    {
    //    return request()->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['passowrd'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // dd('registrasi berhasil');
        return redirect('/login')->with('success', 'Registration Successfull! Please login');
        // User::create($request);

    }
}
