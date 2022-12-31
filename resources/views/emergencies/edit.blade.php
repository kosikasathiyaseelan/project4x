@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update emergency details of patient') }}</div>
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

                    <form action="{{route('emergencies.update' , $emergency->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$emergency->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label mb-1"><b>{{ __('Informed Person Name') }}</b></label>
                            <input id="name" type="text" class="form-control" name="name" value="{{$emergency->name}}" autocomplete="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="relationship" class="form-label mb-1"><b>{{ __('Relationship') }}</b></label>
                            <input id="relationship" type="text" class="form-control" name="relationship" value="{{$emergency->relationship}}" autocomplete="relationship">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label mb-1"><b>{{ __('Address') }}</b></label>
                            <input id="address" type="text" class="form-control" name="address" value="{{$emergency->address}}" autocomplete="address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact_no" class="form-label mb-1"><b>{{ __('Contact Number') }}</b></label>
                            <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{$emergency->contact_no}}" autocomplete="contact_no">
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('emergencies.index')}}" style="width: 200px;">
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