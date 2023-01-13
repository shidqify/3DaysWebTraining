<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\User;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function inputArtikel() {
        //view inputArtikel
        return view("ArtikelView/inputArtikel");
    }

    public function storeArtikel(Request $req) {
        $artikel = new Artikel;
        $artikel->title = $req->title;
        $artikel->author = $req->author;
        $artikel->content = $req->content;
        $artikel->users_id = '1';

        $artikel->save();

        return $artikel;
    }

    public function viewAll() {
        //view viewAll
        $list_artikel = Artikel::all();
        return view("ArtikelView/viewAll",
        [
            "listartikel"=>$list_artikel,
        ]);
    }

    public function editArtikel($id) {
        //view editArtikel
        $detail_artikel = Artikel::where("id", $id)->first();

        return view("ArtikelView/editArtikel", 
        [
            "detailartikel"=>$detail_artikel
        ]);
    }

    public function updateArtikel($id, Request $req) {
        //redirect viewAll
        $detail_artikel = Artikel::where("id", $id)->first();

        $detail_artikel->title = $req->title;
        $detail_artikel->author = $req->author;
        $detail_artikel->content = $req->content;

        $detail_artikel->save();

        return redirect('/listArtikel');
    }

    public function deleteArtikel() {
        //redirect viewAll
        $detail_artikel = Artikel::where("id", $id)->first();

        if($detail_artikel) $detail_artikel->delete();

        return redirect('/listArtikel');
    }

    public function index() {
        return $list = User::with("artikel")->get();
    }
    public function indexArt() {
        return $list = Artikel::with("user")->get();
    }
}
