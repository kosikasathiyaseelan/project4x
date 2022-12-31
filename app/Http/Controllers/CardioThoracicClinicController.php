<?php

namespace App\Http\Controllers;

use App\Models\CardioThoracicClinic;
use App\Models\Patient;
use Illuminate\Http\Request;

class CardioThoracicClinicController extends Controller
{
    public function index()
    {
        $cardio_thoracic_clinics = CardioThoracicClinic::paginate(4);
        return view('cardio_thoracic_clinics.index', compact('cardio_thoracic_clinics'));
    }

    public function create()
    {
        $patient = Patient::all();
        return view('cardio_thoracic_clinics.create')->with('patient', $patient);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'done_by' => 'required',
        ]);
        $input = $request->all();
        CardioThoracicClinic::create($input);
        return redirect()->route('cardio_thoracic_clinics.index')->with('success', 'Patient cardio thoracic clinic detail is created successfully!');
    }

    public function show(CardioThoracicClinic $cardio_thoracic_clinic)
    {
        return view('cardio_thoracic_clinics.show', compact('cardio_thoracic_clinic'));
    }

    public function edit(CardioThoracicClinic $cardio_thoracic_clinic)
    {
        $patient = Patient::all();
        return view('cardio_thoracic_clinics.edit', compact('cardio_thoracic_clinic'))->with('patient', $patient);
    }

    public function update(Request $request, CardioThoracicClinic $cardio_thoracic_clinic)
    {
        $request->validate([
            'patient_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'done_by' => 'required',
        ]);
        $input = $request->all();
        $cardio_thoracic_clinic->update($input);
        return redirect()->route('cardio_thoracic_clinics.index')->with('success', 'Patient cardio thoracic clinic detail is updated successfully!');
    }

    public function destroy(CardioThoracicClinic $cardio_thoracic_clinic)
    {
        $cardio_thoracic_clinic->delete();
        return redirect()->route('cardio_thoracic_clinics.index')->with('success', 'Patient cardio thoracic clinic detail is deleted successfully!');
    }
}
