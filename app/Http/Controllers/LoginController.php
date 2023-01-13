<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index() {
        if(empty(session('user'))) {
            return view('LoginView/login');
        }

        return redirect('/listArtikel');
    }

    public function login(Request $req) {
        $password = $req->password;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user = User::where("email", $req->email)->where("password", $hashed_password)->first();

        if (!empty($user)) {
            Session::put('user', $user);
            return redirect('/listArtikel');
        } else {
            return redirect('/')->with("flash_messages", "user tidak ditemukan");

        }
    }

    public function logout() {
        session(['user'=>null]);
        return redirect('/');
    }

    public function session() {
        return session('user');
    }

}
