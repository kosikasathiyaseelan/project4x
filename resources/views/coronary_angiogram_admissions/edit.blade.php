@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update Coronary Angiogram Admissions') }}</div>
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

                    <form action="{{route('coronary_angiogram_admissions.update' , $coronary_angiogram_admission->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$coronary_angiogram_admission->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="testing_date" class="form-label mb-1"><b>{{ __('Testing Date') }}</b></label>
                                    <input id="testing_date" type="date" class="form-control" name="testing_date" placeholder="mm-dd-yyyy" value="{{$coronary_angiogram_admission->testing_date}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="appointment_date" class="form-label mb-1"><b>{{ __('Appointment Date') }}</b></label>
                                    <input id="appointment_date" type="date" class="form-control" name="appointment_date" placeholder="mm-dd-yyyy" value="{{$coronary_angiogram_admission->appointment_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="appointment_time" class="form-label mb-1"><b>{{ __('Appointment Time') }}</b></label>
                                    <input id="appointment_time" type="time" class="form-control" name="appointment_time" value="{{$coronary_angiogram_admission->appointment_time}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="appointment_ward" class="form-label mb-1"><b>{{ __('Appointment Ward') }}</b></label>
                                    <input id="appointment_ward" type="text" class="form-control" name="appointment_ward" value="{{$coronary_angiogram_admission->appointment_ward}}" autocomplete="appointment_ward">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Coronary Angiogram Admission') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('coronary_angiogram_admissions.index')}}" style="width: 200px;">
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