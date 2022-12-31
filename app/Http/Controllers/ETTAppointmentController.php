<?php

namespace App\Http\Controllers;

use App\Models\ETTAppointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class ETTAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ett_appointments=  ETTAppointment::paginate(4);
        return view('ett_appointments.index', compact('ett_appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('ett_appointments.create')->with('patient', $patient);
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
            'Date' => 'required',
            
            'MO_Cardiology' => 'required',
        ]);
        $input = $request->all();
        ETTAppointment::create($input);
        return redirect()->route('ett_appointments.index')->with('success', 'Patient ett appointments  is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function show(ETTAppointment $ett_appointment)
    {
        return view('ett_appointments.show', compact('ett_appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function edit(ETTAppointment $ettAppointment)
    {
        $patient = Patient::all();
        return view('ett_appointments.edit', compact('ettAppointment'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ETTAppointment $ett_appointment)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' => 'required',
            
            'MO_Cardiology' => 'required',
        ]);
        $input = $request->all();
        $ett_appointment->update($input);
        return redirect()->route('ett_appointments.index')->with('success', 'Patient ett appointment is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ETTAppointment $ett_appointment)
    {
        $ett_appointment->delete();
        return redirect()->route('ett_appointments.index')->with('success', 'Patient ett appointment is deleted successfully!');
    }
}

