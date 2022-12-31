@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card border-dark">
                <div class="card-header font-semibold text-lg">{{ __('Send us a message') }}</div>
                <div class="card-body">
                    @if(session()->get('success'))
                    <div class="alert alert-success flex justify-center mt-0 mb-0">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('contactus') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label"><b>{{ __('Name') }}</b></label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact_no" class="form-label"><b>{{ __('Contact Number') }}</b></label>
                            <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}" required autocomplete="contact_no">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label"><b>{{ __('Email') }}</b></label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message" class="form-label"><b>{{ __('Message') }}</b></label>
                            <textarea type="text" class="form-control" id="message" rows="2" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 offset-md-4" style="float: right;">
                                <button type="submit" class="btn btn-primary" style="float: right;">
                                    {{ __('Send message') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-dark">
                <div class="card-header font-semibold text-lg">{{ __('Contact Details') }}</div>
                <div class="card-body text-dark">
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form"><b>Address</b></label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">Cardiology Unit & Doctor, <br>
                            General Teaching Hospital,<br>
                            Jaffna.
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form"><b>Telephone</b></label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">021-2223348</div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-4 col-label-form"><b>Email</b></label>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-7">thjaffna@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection