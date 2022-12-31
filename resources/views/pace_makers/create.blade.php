@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a pace maker for patient') }}</div>
                <div class="card-body text-dark">
                    <!-- error messages -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('pace_makers.store') }}" method="post">
                        @csrf
                        <div class="row items-center justify-start">
                            <div class="col">  
                                <div class="form-group mb-3">
                                    <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                                    <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                        <option selected>Select Patient</option>
                                        @foreach($patient as $patient)
                                        <option value="{{$patient->id}}">{{$patient->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="type" class="form-label mb-1"><b>{{ __('Type') }}</b></label>
                                    <select id="type" class="form-select" name="type">
                                        <option selected disabled>Select Type</option>
                                        <option value="VVIR">VVIR</option>
                                        <option value="DDDR">DDDR</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="date" type="date" class="form-control" name="date" placeholder="mm-dd-yyyy">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="sensing_and_pacing" class="form-label mb-1"><b>{{ __('Sensing and Pacing') }}</b></label>
                                    <input id="sensing_and_pacing" type="text" class="form-control" name="sensing_and_pacing" autocomplete="sensing_and_pacing">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start mt-3">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="sensed" class="form-label mb-1"><b>{{ __('Sensed (%)') }}</b></label>
                                    <input id="sensed" type="number" step="0.01" class="form-control" name="sensed">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="paced" class="form-label mb-1"><b>{{ __('Paced (%)') }}</b></label>
                                    <input id="paced" type="number" step="0.01" class="form-control" name="paced">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="amplitude" class="form-label mb-1"><b>{{ __('Amplitude') }}</b></label>
                                    <input id="amplitude" type="number" step="0.01" class="form-control" name="amplitude">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start mt-3">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="atrial_pacing" class="form-label mb-1"><b>{{ __('Atrial Pacing') }}</b></label>
                                    <input id="atrial_pacing" type="number" step="0.01" class="form-control" name="atrial_pacing">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="ventricular_pacing" class="form-label mb-1"><b>{{ __('Ventricular Pacing') }}</b></label>
                                    <input id="ventricular_pacing" type="number" step="0.01" class="form-control" name="ventricular_pacing">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="measured_current" class="form-label mb-1"><b>{{ __('Measured Current') }}</b></label>
                                    <input id="measured_current" type="number" step="0.01" class="form-control" name="measured_current">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start mt-3">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="measured_impedance" class="form-label mb-1"><b>{{ __('Measured Impedance') }}</b></label>
                                    <input id="measured_impedance" type="number" step="0.01" class="form-control" name="measured_impedance">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="longevity_minimum" class="form-label mb-1"><b>{{ __('Longevity Minimum') }}</b></label>
                                    <input id="longevity_minimum" type="number" step="0.01" class="form-control" name="longevity_minimum">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="longevity_maximum" class="form-label mb-1"><b>{{ __('Longevity Maximum') }}</b></label>
                                    <input id="longevity_maximum" type="number" step="0.01" class="form-control" name="longevity_maximum">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create Pace Maker') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('pace_makers.index')}}" style="width: 200px;">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
