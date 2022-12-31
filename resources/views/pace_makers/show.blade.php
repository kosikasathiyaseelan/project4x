@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient pace maker details') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$pace_maker->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Type</b></label>
                        <div class="col">: {{$pace_maker->type}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$pace_maker->date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Sensing and Pacing</b></label>
                        <div class="col">: {{$pace_maker->sensing_and_pacing}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Sensed%</b></label>
                        <div class="col">: {{$pace_maker->sensed}} %</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Paced%</b></label>
                        <div class="col">: {{$pace_maker->paced}} %</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Amplitude</b></label>
                        <div class="col">: {{$pace_maker->amplitude}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Atrial Pacing</b></label>
                        <div class="col">: {{$pace_maker->atrial_pacing}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Ventricular Pacing</b></label>
                        <div class="col">: {{$pace_maker->ventricular_pacing}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Measured Current</b></label>
                        <div class="col">: {{$pace_maker->measured_current}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Measured Impedance</b></label>
                        <div class="col">: {{$pace_maker->measured_impedance}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Longevity Minimum</b></label>
                        <div class="col">: {{$pace_maker->longevity_minimum}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Longevity Maximum</b></label>
                        <div class="col">: {{$pace_maker->longevity_maximum}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('pace_makers.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection