@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                <label>Total Patients</label>
                <h1>{{$totalPatient}}</h1>
                <a href="{{route('patients.index')}}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Test Appointments</label>
                    <h1>{{$totalTestAppointment}}</h1>
                    <a href="{{route('test_appointments.index')}}" class="text-white">View</a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total ETT Appointments</label>
                    <h1>{{$totalEttAppointment}}</h1>
                    <a href="{{route('ett_appointments.index')}}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label>Total Treatment Drug</label>
                    <h1>{{$totalTreatmentDrug}}</h1>
                    <a href="{{route('treatment_drugs.index')}}" class="text-white">View</a>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>All Users</label>
                    <h1>{{$totalAllUsers}}</h1>
                    <a href="{{ route('users.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label>Total Doctors</label>
                    <h1>{{$totalDoctor}}</h1>
                    <a href="{{ route('users.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Total Admins</label>
                    <h1>{{$totalAdmin}}</h1>
                    <a href="{{ route('users.index') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Users</label>
                    <h1>{{$totalUser}}</h1>
                    <a href="{{ route('users.index') }}" class="text-white">View</a>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
