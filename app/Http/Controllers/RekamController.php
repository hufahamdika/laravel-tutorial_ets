<?php

namespace App\Http\Controllers;

use App\Models\Medic;
use Illuminate\Http\Request;

class RekamController extends Controller
{

    public function index() {
        return view('medics', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Artikel Berita",
            "medics" => Medic::latest()->get()
        ]);
    }

    public function contents(Medic $medic){
        return view('article', [
            "title" => $medic->title,
            "medic" => $medic
        ]);
    }

}
