<?php

namespace App\Http\Controllers;

use App\User;
use App\Artikel;
use Illuminate\Http\Request;

class RegistrasiSiswa extends Controller
{
    public function index()
    {
        return view("registrasi");
    }

    // public function indexArt() {
    //     return $list = Artikel::with("users_id")->get();
    // }

    public function store(Request $req) {
        // return $req->all();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $password = $req->password;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user->password = $hashed_password;

        $user->save();

        return $user;
    }
    
    public function list() {
        $list_usernya = User::all();
        return view("list_user", 
        [
            "listuser"=>$list_usernya,
        ]);
    }

    public function edit($id) {
        $detail = User::where("id", $id)->first();

        return view("edit_user", 
        [
            "detail"=>$detail
        ]);
    }

    public function update($id, Request $req) {
        $detail = User::where("id", $id)->first();
        
        $detail->name = $req->name;
        $detail->email = $req->email;
        $detail->save();

        return redirect('/list');
    }
    
    public function delete($id) {
        $detail = User::where("id", $id)->first();

        if($detail) $detail->delete();

        return redirect("/list");
    }
}