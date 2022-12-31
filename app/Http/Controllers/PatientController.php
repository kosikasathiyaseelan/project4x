<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patients = Patient::paginate(4);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            'clinic_no' => 'required',
            'case_no' => 'required | unique:patients',
            'name' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            'diagnosis' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'bmi' => 'required',
        ]);
        $input = $request->all();
        Patient::create($input);
        return redirect()->route('patients.index')->with('success', 'Patient is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'clinic_no' => 'required',
            'case_no' => 'required',
            'name' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            'diagnosis' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'bmi' => 'required',
        ]);
        $input = $request->all();
        $patient->update($input);
        return redirect()->route('patients.index')->with('success', 'Patient is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient is deleted successfully!');
    }
}
