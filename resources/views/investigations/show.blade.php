@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient Investigation') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$investigation->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>ECG</b></label>
                        <div class="col">: {{$investigation->ECG}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Troponin IT</b></label>
                        <div class="col">: {{$investigation->Troponin_IT}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Upnormal measurements</b></label>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>LET</b></label>
                        <div class="col-sm-8">: {{($investigation->LET=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>SGOT</b></label>
                        <div class="col-sm-8">: {{($investigation->SGOT=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>SGPT</b></label>
                        <div class="col-sm-8">: {{($investigation->SGPT=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>T_PRO</b></label>
                        <div class="col-sm-8">: {{($investigation->T_PRO=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>T_Billrubin</b></label>
                        <div class="col-sm-8">: {{($investigation->T_Billrubin=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Alb</b></label>
                        <div class="col-sm-8">: {{($investigation->Alb=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Glo</b></label>
                        <div class="col-sm-8">: {{($investigation->Glo=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Alp</b></label>
                        <div class="col-sm-8">: {{($investigation->Alp=='1')?'Yes':'No'}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Ranges</b></label>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>CXR</b></label>
                        <div class="col-sm-4">: {{$investigation->CXR}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>UFR</b></label>
                        <div class="col-sm-4">: {{$investigation->UFR}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>FBC</b></label>
                        <div class="col-sm-4">: {{$investigation->FBC}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>FBS</b></label>
                        <div class="col-sm-4">: {{$investigation->FBS}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>S_Cr</b></label>
                        <div class="col-sm-4">: {{$investigation->S_Cr}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>BU</b></label>
                        <div class="col-sm-4">: {{$investigation->BU}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>SE</b></label>
                        <div class="col-sm-4">: {{$investigation->SE}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>T_Cholestreol</b></label>
                        <div class="col-sm-4">: {{$investigation->T_Cholestreol}}(mg/DL) </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>LDL</b></label>
                        <div class="col-sm-4">: {{$investigation->LDL}} (mg/DL)</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>HDL</b></label>
                        <div class="col-sm-4">: {{$investigation->HDL}}(mg/DL) </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>TG</b></label>
                        <div class="col-sm-4">: {{$investigation->TG}} (mg/DL)</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>ESR</b></label>
                        <div class="col-sm-4">: {{$investigation->ESR}}(mm/hr) </div>
                    </div> 
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>CRP</b></label>
                        <div class="col-sm-4">: {{$investigation->CRP}}(mg/L) </div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Other Details</b></label>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>lipid_profile</b></label>
                        <div class="col-sm-4">: {{$investigation->lipid_profile}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Other_Investigation</b></label>
                        <div class="col-sm-4">: {{$investigation->OTHER_Investigation}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Referrals</b></label>
                        <div class="col-sm-4">: {{$investigation->Referrals}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Plan_on_discharge</b></label>
                        <div class="col-sm-4">: {{$investigation->Plan_on_discharge}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Next_appointment</b></label>
                        <div class="col-sm-4">: {{$investigation->Next_appointment}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>lx_to_be_done</b></label>
                        <div class="col-sm-4">: {{$investigation->lx_to_be_done}} </div>
                    </div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('investigations.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection