@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient procedure') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$procedure->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Side</b></label>
                        <div class="col">: {{$procedure->side}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Access</b></label>
                        <div class="col">: {{$procedure->access}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Leads</b></label>
                        <div class="col">: {{$procedure->leads}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Procedure Type</b></label>
                        <div class="col">: {{$procedure->procedure_type}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Position</b></label>
                        <div class="col">: {{$procedure->position}}</div>
                    </div>

                    <h4><b>Pacemaker/ICD details</b></h4>

                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Generator Position</b></label>
                        <div class="col">: {{$procedure->generator_position}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Pacemaker</b></label>
                        <div class="col">: {{$procedure->pacemaker}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Type</b></label>
                        <div class="col">: {{$procedure->type}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Mode</b></label>
                        <div class="col">: {{$procedure->mode}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Generator</b></label>
                        <div class="col">: {{$procedure->generator}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Atrial Lead</b></label>
                        <div class="col">: {{$procedure->AtrialLead}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>RV Lead</b></label>
                        <div class="col">: {{$procedure->RVLead}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>LV Lead</b></label>
                        <div class="col">: {{$procedure->LVLead}}</div>
                    </div>

                    <h4><b>Implantation Parameters</b></h4>

                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Parameter Leads</b></label>
                        <div class="col">: {{$procedure->parameter_leads}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Threshold(V)</b></label>
                        <div class="col">: {{$procedure->threshold}} V</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Current(mA)</b></label>
                        <div class="col">: {{$procedure->current}} mA</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>P/R Wave(mv)</b></label>
                        <div class="col">: {{$procedure->P_R_wave}} mv</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('procedures.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
