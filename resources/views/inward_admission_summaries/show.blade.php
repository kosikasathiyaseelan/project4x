@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient inward admission summaries') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>DOA</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->DOA}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>DOD</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->DOD}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>BHT No</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->BHT_NO}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Case No</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->case_no}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Reason For Admission</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->Reason_For_Admission}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Acute Problem</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->Acute_Problem}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Pulse</b></label>
                        <div class="col-sm-4">: {{$InwardAdmissionSummary->Pulse}} bpm</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>BP</b></label>
                        <div class="col-sm-4">: {{$InwardAdmissionSummary->BP}} mmHg</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Special Treatment</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->Special_Treatment}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Treatment on Discharge</b></label>
                        <div class="col">: {{$InwardAdmissionSummary->Treatment_on_Discharge}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('inward_admission_summaries.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection