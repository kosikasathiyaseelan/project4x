@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient clinic date') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-3 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$clinicDate->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$clinicDate->date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-label-form"><b>Time</b></label>
                        <div class="col">: {{$clinicDate->time}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-label-form"><b>By whom</b></label>
                        <div class="col">: {{$clinicDate->by_whom}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('clinic_dates.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection