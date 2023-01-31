<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Polyclinic;
use App\Models\Doctor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $polyclinics = Polyclinic::count();
        $doctors = Doctor::count();
        $patients = Patient::count();
        return view('pages.dashboard', compact('polyclinics', 'doctors', 'patients'));
    }
}