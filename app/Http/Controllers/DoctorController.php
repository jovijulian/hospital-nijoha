<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Polyclinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->get();
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polyclinics = Polyclinic::all();
        return view('doctor.create', compact('polyclinics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'polyclinic_id' => 'required',
            'registration_code' => 'unique',
            ]);
            $doctor = new Doctor;
            $date1= date('Ymd',strtotime("-1 days"));
            $date2= date('Ymd');
            if ($date2 != $date1){
                $getName = explode(" ", $request->name);
                $getFirstCharacter = "";
                foreach ($getName as $f) {
                    $getFirstCharacter .= mb_substr($f, 0, 1);
                }
                $code = DB::table('doctors')->whereDate('created_at', $date2)->max(DB::raw('substr(registration_code, -1)'));
                $addNol = '';
                $nextcode1 = substr($code, -3);
                $nextcode1++;
                if (strlen($nextcode1) == 1) {
                    $addNol = "00";
                } elseif (strlen($nextcode1) == 2) {
                    $addNol = "0";
                }
                $doctor->registration_code = "D".$getFirstCharacter.$date2.$addNol.$nextcode1;
            }
            $doctor->name = $request->name;
            $doctor->polyclinic_id = $request->polyclinic_id;
            $doctor->save();
            return redirect()->route('doctor.index')->with('success', 'Doctor Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Doctor::find($id);
        return view('doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $polyclinics = Polyclinic::all();
        return view('doctor.edit', compact('doctor','polyclinics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'polyclinic_id' => 'required',
            ]);
            $doctor = Doctor::find($id);
            $doctor->registration_code = $request->registration_code;
            $doctor->name = $request->name;
            $doctor->polyclinic_id = $request->polyclinic_id;
            $doctor->save();
            return redirect()->route('doctor.index')->with('success', 'Doctor updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctor.index')->with('success', 'Doctor deleted!');
    }
}