<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facedes\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to("home");
        }
        Alert::error('erorr','Password/email salah');
        return back();
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'password' => 'Required',
        ]);

        User::create($request->all());
        Alert::success('Berhasil', 'Anda berhasil membuat akun');



        return redirect()->to('register')->with('success' , 'Register Berhasil');

    //     $credentials = $request->only('name', 'email', 'password');

    //     if (auth()->attempt($credentials)) {
    //         return redirect()->route('home');
    //     }

    //     return redirect()->back()->with('error', 'Email or password is incorrect');
    // 
}






}
