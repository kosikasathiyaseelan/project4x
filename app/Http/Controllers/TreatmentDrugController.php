<?php

namespace App\Http\Controllers;

use App\Models\TreatmentDrug;
use App\Models\Patient;
use Illuminate\Http\Request;

class TreatmentDrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatment_drugs = TreatmentDrug::paginate(4);
        return view('treatment_drugs.index', compact('treatment_drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('treatment_drugs.create')->with('patient', $patient);
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
            'Drug_CCU_HDU_Stay' => 'required',
            'Dosage' => 'required',
            'Frequency' => 'required',
            'Treatment_On_Discharge' => 'required',
            
        ]);
        $input = $request->all();
        TreatmentDrug::create($input);
        return redirect()->route('treatment_drugs.index')->with('success', 'Patient treatment drug detail is created successfully!');
    }

    
    public function show(TreatmentDrug $TreatmentDrug)
    {
        return view('treatment_drugs.show', compact('TreatmentDrug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentDrug $treatmentDrug)
    {
        $patient = Patient::all();
        return view('treatment_drugs.edit', compact('treatmentDrug'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreatmentDrug $treatmentDrug)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' => 'required',
            'Drug_CCU_HDU_Stay' => 'required',
            'Frequency' => 'required',
            'Dosage' => 'required',
            'Treatment_On_Discharge' => 'required',
        ]);
        $input = $request->all();
        $treatmentDrug->update($input);
        return redirect()->route('treatment_drugs.index')->with('success', 'Patient treatment drugs is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreatmentDrug $treatmentDrug)
    {
        $treatmentDrug->delete();
        return redirect()->route('treatment_drugs.index')->with('success', 'Patient treatment drugs is deleted successfully!');
    }
}
