<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'namalengkap' => $request->namalengkap,
            'alamat' => $request->alamat,
            'role' => $request->role,
            
        ]);

        Session::flash('message', 'Register Berhasil. Silahkan Login menggunakan username dan password.');
        return redirect('register');
    }
    }