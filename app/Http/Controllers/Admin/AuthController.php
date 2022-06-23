<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required","email","string"],
            "password" => ["required"],
        ]);

        if(auth('admin')->attempt($data))
        {
            return redirect(route('admin.posts.index'));
        }

        return redirect(route("admin.login"))->withErrors(['email'=>"Пользователь не найден"]);
    }

//    public function logout()
//    {
//        auth("web")->logout();
//        return redirect(route('home'));
//    }
}
