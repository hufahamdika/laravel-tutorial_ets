<?php

namespace App\Http\Controllers;
use App\Models\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
        return view('medics', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Penulis",
            "patients" => Patient::latest()->get()
        ]);
    }

    public function contents(Patient $patient){
        return view('medics', [
            "name" => "Abidjanna Zulfa Hamdika",
            "email" => "hufahamdika7997@gmail.com",
            "title" => "Penulis" . " " . $patient->name,
            "patient" => $patient->name,
            "medics" => $patient->medics->load('doctor', 'patient')
        ]);
    }
}
