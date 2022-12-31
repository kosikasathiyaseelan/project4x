@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update clinic visit') }}</div>
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

                    <form action="{{route('clinic_visits.update' , $clinicVisit->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$clinicVisit->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="date" type="date" class="form-control" name="date" placeholder="mm-dd-yyyy" value="{{$clinicVisit->date}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="complaint" class="form-label mb-1"><b>{{ __('Complaint') }}</b></label>
                                    <input id="complaint" type="text" class="form-control" name="complaint" autocomplete="complaint" value="{{$clinicVisit->complaint}}">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="PR" class="form-label mb-1"><b>{{ __('PR (bpm)') }}</b></label>
                                    <input id="PR" type="number" class="form-control" name="PR" value="{{$clinicVisit->PR}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="PR_nature" class="form-label mb-1"><b>{{ __('PR Nature') }}</b></label>
                                    <select id="PR_nature" class="form-select" name="PR_nature">
                                        <option selected>Select </option>
                                        <option value="Regular" {{($clinicVisit->PR_nature=='Regular')? 'selected':''}}>Regular</option>
                                        <option value="Irregular" {{($clinicVisit->PR_nature=='Irregular')? 'selected':''}}>Irregular</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="BP" class="form-label mb-1"><b>{{ __('BP (mmHg)') }}</b></label>
                                    <input id="BP" type="number" step="0.01" class="form-control" name="BP" value="{{$clinicVisit->BP}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="investigation" class="form-label mb-1"><b>{{ __('Investigation') }}</b></label>
                            <textarea type="text" class="form-control" id="investigation" rows="2" name="investigation">{{$clinicVisit->investigation}}</textarea>
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Clinic Visit') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('clinic_visits.index')}}" style="width: 200px;">
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