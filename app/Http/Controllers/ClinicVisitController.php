<?php

namespace App\Http\Controllers;

use App\Models\ClinicVisit;
use App\Models\Patient;
use Illuminate\Http\Request;

class ClinicVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinic_visits = ClinicVisit::paginate(4);
        return view('clinic_visits.index', compact('clinic_visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('clinic_visits.create')->with('patient', $patient);
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
            'complaint' => 'required',
            'PR' => 'required',
            'PR_nature' => 'required',
            'BP' => 'required',
            'investigation' => 'required',
        ]);
        $input = $request->all();
        ClinicVisit::create($input);
        return redirect()->route('clinic_visits.index')->with('success', 'Patient clinic visit is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicVisit $clinicVisit)
    {
        return view('clinic_visits.show', compact('clinicVisit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicVisit $clinicVisit)
    {
        $patient = Patient::all();
        return view('clinic_visits.edit', compact('clinicVisit'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClinicVisit $clinicVisit)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'complaint' => 'required',
            'PR' => 'required',
            'PR_nature' => 'required',
            'BP' => 'required',
            'investigation' => 'required',
        ]);
        $input = $request->all();
        $clinicVisit->update($input);
        return redirect()->route('clinic_visits.index')->with('success', 'Patient clinic visit is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicVisit $clinicVisit)
    {
        $clinicVisit->delete();
        return redirect()->route('clinic_visits.index')->with('success', 'Patient clinic visit is deleted successfully!');
    }
}
