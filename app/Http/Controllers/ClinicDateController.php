<?php

namespace App\Http\Controllers;

use App\Models\ClinicDate;
use App\Models\Patient;
use Illuminate\Http\Request;

class ClinicDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinic_dates = ClinicDate::paginate(4);
        return view('clinic_dates.index', compact('clinic_dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('clinic_dates.create')->with('patient', $patient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'by_whom' => 'required',
        ]);
        $input = $request->all();
        ClinicDate::create($input);
        return redirect()->route('clinic_dates.index')->with('success', 'Patient clinic date is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicDate $clinicDate)
    {
        return view('clinic_dates.show', compact('clinicDate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicDate $clinicDate)
    {
        $patient = Patient::all();
        return view('clinic_dates.edit', compact('clinicDate'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClinicDate $clinicDate)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'by_whom' => 'required',
        ]);
        $input = $request->all();
        $clinicDate->update($input);
        return redirect()->route('clinic_dates.index')->with('success', 'Patient clinic date is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicDate $clinicDate)
    {
        $clinicDate->delete();
        return redirect()->route('clinic_dates.index')->with('success', 'Patient clinic date is deleted successfully!');
    }
}
