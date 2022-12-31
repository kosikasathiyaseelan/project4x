@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient coronary angiogram admission') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$coronary_angiogram_admission->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Testing Date</b></label>
                        <div class="col">: {{$coronary_angiogram_admission->testing_date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Appointment Date</b></label>
                        <div class="col">: {{$coronary_angiogram_admission->appointment_date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Appointment Time</b></label>
                        <div class="col">: {{$coronary_angiogram_admission->appointment_time}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Appointment Ward</b></label>
                        <div class="col">: {{$coronary_angiogram_admission->appointment_ward}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('coronary_angiogram_admissions.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection