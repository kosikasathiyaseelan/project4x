@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient emergency details') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-5 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$emergency->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-5 col-label-form"><b>Informed Person Name</b></label>
                        <div class="col">: {{$emergency->name}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-5 col-label-form"><b>Relationship</b></label>
                        <div class="col">: {{$emergency->relationship}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-5 col-label-form"><b>Address</b></label>
                        <div class="col">: {{$emergency->address}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-5 col-label-form"><b>Contact Number</b></label>
                        <div class="col">: {{$emergency->contact_no}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('emergencies.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection