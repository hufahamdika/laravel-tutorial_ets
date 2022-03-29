<?php

namespace App\Http\Controllers;

use App\Models\DoctorController;
use App\Http\Requests\StoreDoctorControllerRequest;
use App\Http\Requests\UpdateDoctorControllerRequest;

class DoctorControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorController  $doctorController
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorController $doctorController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorController  $doctorController
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorController $doctorController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorControllerRequest  $request
     * @param  \App\Models\DoctorController  $doctorController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorControllerRequest $request, DoctorController $doctorController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorController  $doctorController
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorController $doctorController)
    {
        //
    }
}
