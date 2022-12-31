@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a procedure for patient') }}</div>
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
                    <form action="{{ route('procedures.store') }}" method="post">
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
                                    <label for="side" class="form-label mb-1"><b>{{ __('Side') }}</b></label>
                                    <select id="side" class="form-select" name="side">
                                        <option selected disabled>Select Side</option>
                                        <option value="Left">Left</option>
                                        <option value="Right">Right</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="access" class="form-label mb-1"><b>{{ __('Access') }}</b></label>
                                    <select id="access" class="form-select" name="access">
                                        <option selected disabled>Select Access</option>
                                        <option value="SCV Puncture">SCV Puncture</option>
                                        <option value="CV cut down">CV cut down</option>
                                        <option value="Epicardial">Epicardial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="leads" class="form-label mb-1"><b>{{ __('Leads') }}</b></label>
                                    <select id="leads" class="form-select" name="leads">
                                        <option selected disabled>Select Leads</option>
                                        <option value="Atrial">Atrial</option>
                                        <option value="RV">RV</option>
                                        <option value="LV">LV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="procedure_type" class="form-label mb-1"><b>{{ __('Procedure Type') }}</b></label>
                                    <select id="procedure_type" class="form-select" name="procedure_type">
                                        <option selected disabled>Select Type</option>
                                        <option value="Active fix">Active fix</option>
                                        <option value="Passive">Passive</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="position" class="form-label mb-1"><b>{{ __('Position') }}</b></label>
                                    <input id="position" type="text" class="form-control" name="position" autocomplete="position"> 
                                </div>
                            </div>
                        </div>
                        <h4><b>Pacemaker/ICD details</b></h4>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="generator_position" class="form-label mb-1"><b>{{ __('Generator Position') }}</b></label>
                                    <select id="generator_position" class="form-select" name="generator_position">
                                        <option selected disabled>Select Generator Position</option>
                                        <option value="Pre-Pectoral">Pre-Pectoral</option>
                                        <option value="Sub-Pectoral">Sub-Pectoral</option>
                                        <option value="Abdominal">Abdominal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="pacemaker" class="form-label mb-1"><b>{{ __('Pacemaker') }}</b></label>
                                    <select id="pacemaker" class="form-select" name="pacemaker">
                                        <option selected disabled>Select Pacemaker</option>
                                        <option value="New">New</option>
                                        <option value="Re-implant">Re-implant</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="type" class="form-label mb-1"><b>{{ __('Type') }}</b></label>
                                    <input id="type" type="text" class="form-control" name="type" autocomplete="type"> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="mode" class="form-label mb-1"><b>{{ __('Mode') }}</b></label>
                                    <input id="mode" type="text" class="form-control" name="mode" autocomplete="mode"> 
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="generator" class="form-label mb-1"><b>{{ __('Generator') }}</b></label>
                                    <input id="generator" type="text" class="form-control" name="generator" autocomplete="generator"> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="AtrialLead" class="form-label mb-1"><b>{{ __('Atrial Lead') }}</b></label>
                                    <input id="AtrialLead" type="text" class="form-control" name="AtrialLead" autocomplete="AtrialLead"> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="RVLead" class="form-label mb-1"><b>{{ __('RV Lead') }}</b></label>
                                    <input id="RVLead" type="text" class="form-control" name="RVLead" autocomplete="RVLead"> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LVLead" class="form-label mb-1"><b>{{ __('LV Lead') }}</b></label>
                                    <input id="LVLead" type="text" class="form-control" name="LVLead" autocomplete="LVLead"> 
                                </div>
                            </div>
                        </div>
                        <h4><b>Implantation Parameters</b></h4>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="parameter_leads" class="form-label mb-1"><b>{{ __('Parameter Leads') }}</b></label>
                                    <select id="parameter_leads" class="form-select" name="parameter_leads">
                                        <option selected disabled>Select Leads</option>
                                        <option value="Atrial">Atrial</option>
                                        <option value="RV">RV</option>
                                        <option value="LV">LV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="threshold" class="form-label mb-1"><b>{{ __('Threshold(V)') }}</b></label>
                                    <input id="threshold" type="number" step="0.01" class="form-control" name="threshold">
                                </div>
                            </div>   
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="current" class="form-label mb-1"><b>{{ __('Current(mA)') }}</b></label>
                                    <input id="current" type="number" step="0.01" class="form-control" name="current">
                                </div>
                            </div>   
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="P_R_wave" class="form-label mb-1"><b>{{ __('P/R Wave(mv)') }}</b></label>
                                    <input id="P_R_wave" type="number" step="0.01" class="form-control" name="P_R_wave">
                                </div>
                            </div>   
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create Procedure') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('procedures.index')}}" style="width: 200px;">
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
