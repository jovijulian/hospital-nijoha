<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Polyclinic;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('id', 'desc')->get();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fetchDoctor(Request $request)
    {
        $doctors = Doctor::where("polyclinic_id", $request->polyclinic_id)
                                ->get(["name", "id"]);
        return response()->json($doctors);
    }

    public function create()
    {
        $polyclinics = Polyclinic::orderBy('id', 'asc')->get();
        return view('patient.create', compact('polyclinics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'polyclinic_id' => 'required',
            'doctor_id' => 'required',
            'registration_code' => 'unique',
            'birthDate' => 'required',
            ]);
            $patient = new Patient;
            $date1= date('Ymd',strtotime("-1 days"));
            $date2= date('Ymd');
            if ($date2 != $date1){
                $getName = explode(" ", $request->name);
                $getFirstCharacter = "";
                foreach ($getName as $f) {
                    $getFirstCharacter .= mb_substr($f, 0, 1);
                }
                $code = DB::table('patients')->whereDate('created_at', $date2)->max(DB::raw('substr(registration_code, -1)'));
                $addNol = '';
                $nextcode1 = substr($code, -3);
                $nextcode1++;
                if (strlen($nextcode1) == 1) {
                    $addNol = "00";
                } elseif (strlen($nextcode1) == 2) {
                    $addNol = "0";
                }
                $patient->registration_code = "P".$getFirstCharacter.$date2.$addNol.$nextcode1;
            }
            $patient->name = $request->name;
            $patient->birthDate = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->polyclinic_id = $request->polyclinic_id;
            $patient->doctor_id = $request->doctor_id;
            $patient->save();
            return redirect()->route('patient.index')->with('success', 'Patient Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $polyclinics = Polyclinic::orderBy('id', 'asc')->get();
        return view('patient.edit', compact('patient','polyclinics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'polyclinic_id' => 'required',
            'doctor_id' => 'required',
            'registration_code' => 'required',
            'birthDate' => 'required',
            ]);
            $patient = Patient::find($id);
            $patient->registration_code = $request->registration_code;
            $patient->name = $request->name;
            $patient->birthDate = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->polyclinic_id = $request->polyclinic_id;
            $patient->doctor_id = $request->doctor_id;
            $patient->save();
            return redirect()->route('patient.index')->with('success', 'Patient Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patient.index')->with('success', 'Patient deleted!');
    }
}