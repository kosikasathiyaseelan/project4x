<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use App\Models\Patient;
use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emergencies = Emergency::paginate(4);
        return view('emergencies.index', compact('emergencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('emergencies.create')->with('patient', $patient);
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
            'name' => 'required',
            'relationship' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
        ]);
        $input = $request->all();
        Emergency::create($input);
        return redirect()->route('emergencies.index')->with('success', 'Patient emergency detail is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        return view('emergencies.show', compact('emergency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        $patient = Patient::all();
        return view('emergencies.edit', compact('emergency'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        $request->validate([
            'patient_id' => 'required',
            'name' => 'required',
            'relationship' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
        ]);
        $input = $request->all();
        $emergency->update($input);
        return redirect()->route('emergencies.index')->with('success', 'Patient emergency detail is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        $emergency->delete();
        return redirect()->route('emergencies.index')->with('success', 'Patient emergency detail is deleted successfully!');
    }
}
