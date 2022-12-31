<?php

namespace App\Http\Controllers;

use App\Models\TestAppointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class TestAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test_appointments = TestAppointment::paginate(4);
        return view('test_appointments.index', compact('test_appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('test_appointments.create')->with('patient', $patient);
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
            'Special_Investication' => 'required',
            'Date' => 'required',
            'Time' => 'required',
           
        ]);
        $input = $request->all();
        TestAppointment::create($input);
        return redirect()->route('test_appointments.index')->with('success', 'Patient test appointments is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function show( TestAppointment $test_appointment)
    {
        return view('test_appointments.show', compact('test_appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function edit(TestAppointment $test_appointment)
    {
        $patient = Patient::all();
        return view('test_appointments.edit', compact('test_appointment'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestAppointment $test_appointment)
    {
        $request->validate([
            'patient_id' => 'required',
            'Special_Investication' => 'required',
            'Date' => 'required',
            'Time' => 'required',
           
        ]);
        $input = $request->all();
        $test_appointment->update($input);
        return redirect()->route('test_appointments.index')->with('success', 'Patient test appointments is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicDate  $clinicDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestAppointment $testAppointment)
    {
        $testAppointment->delete();
        return redirect()->route('test_appointments.index')->with('success', 'Patient testAppointmentis deleted successfully!');
    }
}

