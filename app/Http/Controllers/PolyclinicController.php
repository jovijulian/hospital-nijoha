<?php

namespace App\Http\Controllers;

use App\Models\Polyclinic;
use App\Http\Requests\StorePolyclinicRequest;
use App\Http\Requests\UpdatePolyclinicRequest;

class PolyclinicController extends Controller
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
     * @param  \App\Http\Requests\StorePolyclinicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePolyclinicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function show(Polyclinic $polyclinic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function edit(Polyclinic $polyclinic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePolyclinicRequest  $request
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePolyclinicRequest $request, Polyclinic $polyclinic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polyclinic $polyclinic)
    {
        //
    }
}
