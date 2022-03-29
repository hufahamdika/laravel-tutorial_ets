<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
 
class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'healthcondition' => 'required|max:200',
           'temperature' => 'required|numeric|min:35|max:45.5',
           'resep' => 'required|image|max:2048|mimes:png,jpg,jpeg'
        ]);
        $imagelink = $this->displayImage($request);
        $request->resep = $imagelink;

        return view('proses',['data' => $request]) -> with('success', 'form submitted');
    }

    public function displayImage(Request $request)
    {
        $image = $request->resep;
        $imagename = '';
        if ($image !== NULL)
        {
            $imagename = "resep" . "." . $image->extension();
            $image->storeAs(null, $imagename, ['disk' => 'public']);
        }
        return asset('storage') . '/' . $imagename;
    }
}
