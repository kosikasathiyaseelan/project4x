@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient Treatment Drug Distribution') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$TreatmentDrug->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$TreatmentDrug->Date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Complaint</b></label>
                        <div class="col">: {{$TreatmentDrug->Drug_CCU_HDU_Stay}}</div>
                    </div>
                   
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>PR</b></label>
                        <div class="col-sm-4">: {{$TreatmentDrug->Dosage}} mg</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>PR Nature</b></label>
                        <div class="col-sm-4">: {{$TreatmentDrug->Frequency}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Treatment_On_Discharge</b></label>
                        <div class="col-sm-4">: {{$TreatmentDrug->Treatment_On_Discharge}} </div>
                    </div>
                  
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('treatment_drugs.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection