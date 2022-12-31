@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 800px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient details') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Clinic No</b></label>
                        <div class="col-sm-4">: {{$patient->clinic_no}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Case No</b></label>
                        <div class="col-sm-4">: {{$patient->case_no}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Name</b></label>
                        <div class="col-sm-8">: {{$patient->name}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Address</b></label>
                        <div class="col-sm-8">: {{$patient->address}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date of Birth</b></label>
                        <div class="col-sm-4">: {{$patient->dob}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Age</b></label>
                        <div class="col-sm-4">: {{$patient->age}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Gender</b></label>
                        <div class="col-sm-4">: {{$patient->gender}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Blood Group</b></label>
                        <div class="col-sm-4">: {{$patient->blood_group}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Diagnosis</b></label>
                        <div class="col-sm-8">: {{$patient->diagnosis}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Associated Medical Problems</b></label>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>DM</b></label>
                        <div class="col-sm-8">: {{($patient->DM=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>HT</b></label>
                        <div class="col-sm-8">: {{($patient->HT=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>DYSLIPIDAEMIA</b></label>
                        <div class="col-sm-8">: {{($patient->DYSLIPIDAEMIA=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>CVA/TIA</b></label>
                        <div class="col-sm-8">: {{($patient->CVA_TIA=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>PVD</b></label>
                        <div class="col-sm-8">: {{($patient->PVD=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>BA</b></label>
                        <div class="col-sm-8">: {{($patient->BA=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>RENAL DISEASE</b></label>
                        <div class="col-sm-8">: {{($patient->RENAL_DISEASE=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row mt-4 mb-4">
                        <label class="col-sm-4 col-label-form"><b>Other Medical Problems</b></label>
                        <div class="col-sm-8">: {{$patient->other}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Alcohol</b></label>
                        <div class="col-sm-8">: {{($patient->alcohol=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Smoking</b></label>
                        <div class="col-sm-8">: {{($patient->smoking=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Family Hx</b></label>
                        <div class="col-sm-8">: {{($patient->family_hx=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Allergic Hx</b></label>
                        <div class="col-sm-8">: {{($patient->allergic_hx=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Height</b></label>
                        <div class="col-sm-4">: {{$patient->height}} cm</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Weight</b></label>
                        <div class="col-sm-4">: {{$patient->weight}} kg</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>BMI</b></label>
                        <div class="col-sm-4">: {{$patient->bmi}} kgm-2</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('patients.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection