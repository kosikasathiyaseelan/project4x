<?php

namespace App\Http\Controllers;

use App\Models\CoronaryAngiogramAdmission;
use App\Models\Patient;
use Illuminate\Http\Request;

class CoronaryAngiogramAdmissionController extends Controller
{
    public function index()
    {
        $coronary_angiogram_admissions = CoronaryAngiogramAdmission::paginate(4);
        return view('coronary_angiogram_admissions.index', compact('coronary_angiogram_admissions'));
    }

    public function create()
    {
        $patient = Patient::all();
        return view('coronary_angiogram_admissions.create')->with('patient', $patient);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'testing_date' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_ward' => 'required',
        ]);
        $input = $request->all();
        CoronaryAngiogramAdmission::create($input);
        return redirect()->route('coronary_angiogram_admissions.index')->with('success', 'Patient coronary angiogram admission is created successfully!');
    }

    public function show(CoronaryAngiogramAdmission $coronary_angiogram_admission)
    {
        return view('coronary_angiogram_admissions.show', compact('coronary_angiogram_admission'));
    }

    public function edit(CoronaryAngiogramAdmission $coronary_angiogram_admission)
    {
        $patient = Patient::all();
        return view('coronary_angiogram_admissions.edit', compact('coronary_angiogram_admission'))->with('patient', $patient);
    }

    public function update(Request $request, CoronaryAngiogramAdmission $coronary_angiogram_admission)
    {
        $request->validate([
            'patient_id' => 'required',
            'testing_date' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_ward' => 'required',
        ]);
        $input = $request->all();
        $coronary_angiogram_admission->update($input);
        return redirect()->route('coronary_angiogram_admissions.index')->with('success', 'Patient coronary angiogram admission is updated successfully!');
    }

    public function destroy(CoronaryAngiogramAdmission $coronary_angiogram_admission)
    {
        $coronary_angiogram_admission->delete();
        return redirect()->route('coronary_angiogram_admissions.index')->with('success', 'Patient coronary angiogram admission is deleted successfully!');
    }
}