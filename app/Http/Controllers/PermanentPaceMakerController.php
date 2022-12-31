<?php

namespace App\Http\Controllers;

use App\Models\PermanentPaceMaker;
use App\Models\Patient;
use Illuminate\Http\Request;

class PermanentPaceMakerController extends Controller
{
    public function index()
    {
        $permanent_pace_makers = PermanentPaceMaker::paginate(4);
        return view('permanent_pace_makers.index', compact('permanent_pace_makers'));
    }

    public function create()
    {
        $patient = Patient::all();
        return view('permanent_pace_makers.create')->with('patient', $patient);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'cath_no' => 'required',
            'indication' => 'required',
            'done_by' => 'required',
        ]);
        $input = $request->all();
        PermanentPaceMaker::create($input);
        return redirect()->route('permanent_pace_makers.index')->with('success', 'Patient permanent pace maker is created successfully!');
    }

    public function show(PermanentPaceMaker $permanent_pace_maker)
    {
        return view('permanent_pace_makers.show', compact('permanent_pace_maker'));
    }

    public function edit(PermanentPaceMaker $permanent_pace_maker)
    {
        $patient = Patient::all();
        return view('permanent_pace_makers.edit', compact('permanent_pace_maker'))->with('patient', $patient);
    }

    public function update(Request $request, PermanentPaceMaker $permanent_pace_maker)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'cath_no' => 'required',
            'indication' => 'required',
            'done_by' => 'required',
        ]);
        $input = $request->all();
        $permanent_pace_maker->update($input);
        return redirect()->route('permanent_pace_makers.index')->with('success', 'Patient permanent pace maker is updated successfully!');
    }
  
    public function destroy(PermanentPaceMaker $permanent_pace_maker)
    {
        $permanent_pace_maker->delete();
        return redirect()->route('permanent_pace_makers.index')->with('success', 'Patient permanent pace maker is deleted successfully!');
    }
}
