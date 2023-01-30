<?php

namespace App\Http\Controllers;

use App\Models\Polyclinic;
use App\Http\Requests\StorePolyclinicRequest;
use App\Http\Requests\UpdatePolyclinicRequest;
use Illuminate\Http\Request;

class PolyclinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polyclinics = Polyclinic::orderBy('id', 'desc')->get();
        return view('polyclinic.index', compact('polyclinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polyclinic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePolyclinicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            ]);
            $polyclinic = new Polyclinic();
            $polyclinic->name = $request->name;
            $polyclinic->save();
            return redirect()->route('polyclinic.index')->with('success', 'Polyclinic Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function show($polyclinic)
    {
        return view('polyclinic.show', compact('polyclinic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $polyclinic = Polyclinic::find($id);
        return view('polyclinic.edit', compact('polyclinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePolyclinicRequest  $request
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $polyclinic)
    {
        $request->validate([
            'name' => 'required',
            ]);
            $polyclinic = Polyclinic::find($polyclinic);
            $polyclinic->name = $request->name;
            $polyclinic->save();
            return redirect()->route('polyclinic.index')->with('success', 'Polyclinic updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polyclinic  $polyclinic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $polyclinic = Polyclinic::find($id);
        $polyclinic->delete();
        return redirect()->route('polyclinic.index')->with('success', 'Polyclinic deleted!');
    }
}
