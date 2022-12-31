<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Models\Patient;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::paginate(4);
        return view('procedures.index', compact('procedures'));
    }

    public function create()
    {
        $patient = Patient::all();
        return view('procedures.create')->with('patient', $patient);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'side' => 'required',
            'access' => 'required',

            'leads' => 'required',
            'procedure_type' => 'required',
            'position' => 'required',

            'generator_position' => 'required',
            'pacemaker' => 'required',
            'type' => 'required',
            'mode' => 'required',
            'generator' => 'required',
            'AtrialLead' => 'required',
            'RVLead' => 'required',
            'LVLead' => 'required',

            'parameter_leads' => 'required',
            'threshold' => 'required',
            'current' => 'required',
            'P_R_wave' => 'required',
        ]);
        $input = $request->all();
        Procedure::create($input);
        return redirect()->route('procedures.index')->with('success', 'Patient procedure is created successfully!');
    }

    public function show(Procedure $procedure)
    {
        return view('procedures.show', compact('procedure'));
    }

    public function edit(Procedure $procedure)
    {
        $patient = Patient::all();
        return view('procedures.edit', compact('procedure'))->with('patient', $patient);
    }

    public function update(Request $request, Procedure $procedure)
    {
        $request->validate([
            'patient_id' => 'required',
            'side' => 'required',
            'access' => 'required',

            'leads' => 'required',
            'procedure_type' => 'required',
            'position' => 'required',

            'generator_position' => 'required',
            'pacemaker' => 'required',
            'type' => 'required',
            'mode' => 'required',
            'generator' => 'required',
            'AtrialLead' => 'required',
            'RVLead' => 'required',
            'LVLead' => 'required',

            'parameter_leads' => 'required',
            'threshold' => 'required',
            'current' => 'required',
            'P_R_wave' => 'required',
        ]);
        $input = $request->all();
        $procedure->update($input);
        return redirect()->route('procedures.index')->with('success', 'Patient procedure is updated successfully!');
    }
  
    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        return redirect()->route('procedures.index')->with('success', 'Patient procedure is deleted successfully!');
    }
}
