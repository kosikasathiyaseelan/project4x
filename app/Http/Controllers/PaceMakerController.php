<?php

namespace App\Http\Controllers;

use App\Models\PaceMaker;
use App\Models\Patient;
use Illuminate\Http\Request;

class PaceMakerController extends Controller
{
    public function index()
    {
        $pace_makers = PaceMaker::paginate(4);
        return view('pace_makers.index', compact('pace_makers'));
    }

    public function create()
    {
        $patient = Patient::all();
        return view('pace_makers.create')->with('patient', $patient);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'sensing_and_pacing' => 'required',
            'sensed' => 'required',
            'paced' => 'required',
            'amplitude' => 'required',
            'atrial_pacing' => 'required',
            'ventricular_pacing' => 'required',
            'measured_current' => 'required',
            'measured_impedance' => 'required',
            'longevity_minimum' => 'required',
            'longevity_maximum' => 'required',
        ]);
        $input = $request->all();
        PaceMaker::create($input);
        return redirect()->route('pace_makers.index')->with('success', 'Patient pace maker is created successfully!');
    }
   
    public function show(PaceMaker $pace_maker)
    {
        return view('pace_makers.show', compact('pace_maker'));
    }

    public function edit(PaceMaker $pace_maker)
    {
        $patient = Patient::all();
        return view('pace_makers.edit', compact('pace_maker'))->with('patient', $patient);
    }

    public function update(Request $request, PaceMaker $pace_maker)
    {
        $request->validate([
            'patient_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'sensing_and_pacing' => 'required',
            'sensed' => 'required',
            'paced' => 'required',
            'amplitude' => 'required',
            'atrial_pacing' => 'required',
            'ventricular_pacing' => 'required',
            'measured_current' => 'required',
            'measured_impedance' => 'required',
            'longevity_minimum' => 'required',
            'longevity_maximum' => 'required',
        ]);
        $input = $request->all();
        $pace_maker->update($input);
        return redirect()->route('pace_makers.index')->with('success', 'Patient pace maker is updated successfully!');
    }
  
    public function destroy(PaceMaker $pace_maker)
    {
        $pace_maker->delete();
        return redirect()->route('pace_makers.index')->with('success', 'Patient pace maker is deleted successfully!');
    }
}
