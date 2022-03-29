<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\medic;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    public function index() {
        return view('doctors', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Kategori",
            "categories" => doctor::all()
        ]);
    }
    public function contents(Doctor $doctor){
        return view('medics', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Kategori" . " " . $doctor->name,
            "medics" => $doctor->medics->load('doctor', 'patient'),
            "doctor" => $doctor->name
            //"category" => $category,
        ]);
    }
}
