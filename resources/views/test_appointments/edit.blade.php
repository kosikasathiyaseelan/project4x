@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update Test Appointment') }}</div>
                <div class="card-body text-dark">
                    <!-- error messages -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> There were some problems with your input.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('test_appointments.update' , $test_appointment->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$test_appointment->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                        <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Special_Investication" class="form-label mb-1"><b>{{ __('Special Investication') }}</b></label>
                                    <select id="Special_Investication" class="form-select" name="Special_Investication">
                                        <option selected>Select </option>
                                        <option value="2D_Echo" {{($test_appointment->Special_Investication=='2D_Echo')? 'selected':''}}>2D_Echo </option>
                                        <option value="Stress_Echo" {{($test_appointment->Special_Investication=='Stress_Echo')? 'selected':''}}>Stress_Echo</option>
                                        <option value="TOE" {{($test_appointment->Special_Investication=='TOE')? 'selected':''}}>TOE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="Date" type="date" class="form-control" name="Date" placeholder="dd-mm-yyyy" value="{{$test_appointment->Date}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Time" class="form-label mb-1"><b>{{ __('Time') }}</b></label>
                                    <input id="Time" type="time" class="form-control" name="Time" value="{{$test_appointment->Time}}">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Test Appointment') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('test_appointments.index')}}" style="width: 200px;">
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