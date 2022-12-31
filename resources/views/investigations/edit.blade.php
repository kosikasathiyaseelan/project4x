@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update investigation') }}</div>
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

                    <form action="{{route('investigations.update' , $investigation->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$investigation->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">   
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="ECG" class="form-label mb-1"><b>{{ __('ECG') }}</b></label>
                                    <input id="ECG" type="text" class="form-control" name="ECG" value="{{$investigation->ECG}}" autocomplete="ECG">
                                </div>
                            </div>
                            </div>
                            <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Troponin_IT" class="form-label mb-1"><b>{{ __('Troponin_IT') }}</b></label>
                                    <input id="Troponin_IT" type="text" class="form-control" name="Troponin_IT" value="{{$investigation->Troponin_IT}}" autocomplete="Troponin_IT">
                                </div>
                            </div> 
                        </div>
                        <div class="form-group mb-3">
                            <label for="Upnormal_measurements" class="form-label mb-1"><b>{{ __('Upnormal measurements') }}</b></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="LET" value="1" name="LET" {{($investigation->LET=='1')? 'checked':''}}>
                                <label class="form-check-label" for="LET"><b>LET</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="SGOT" value="1" name="SGOT" {{($investigation->SGOT=='1')? 'checked':''}}>
                                <label class="form-check-label" for="SGOT"><b>SGOT</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="SGPT" value="1" name="SGPT" {{($investigation->SGPT=='1')? 'checked':''}}>
                                <label class="form-check-label" for="SGPT"><b>SGPT</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="T_PRO" value="1" name="T_PRO" {{($investigation->T_PRO=='1')? 'checked':''}}>
                                <label class="form-check-label" for="T_PRO"><b>T_PRO</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="T_Billrubin" value="1" name="T_Billrubin" {{($investigation->T_Billrubin=='1')? 'checked':''}}>
                                <label class="form-check-label" for="T_Billrubin"><b>T_Billrubin</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="Alb" value="1" name="Alb" {{($investigation->Alb=='1')? 'checked':''}}>
                                <label class="form-check-label" for="Alb"><b>Alb</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="Glo" value="1" name="Glo" {{($investigation->Glo=='1')? 'checked':''}}>
                                <label class="form-check-label" for="Glo"><b>Glo</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="Alp" value="1" name="Alp" {{($investigation->Alp=='1')? 'checked':''}}>
                                <label class="form-check-label" for="Alp"><b>Alp</b></label>
                            </div>
                        </div>
                        <div class="row items-center justify-start">  
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="CXR" class="form-label mb-1"><b>{{ __('CXR') }}</b></label>
                                   <input id="CXR" type="text" class="form-control" name="CXR" value="{{$investigation->CXR}}" autocomplete="CXR">
                               </div>
                           </div>
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="UFR" class="form-label mb-1"><b>{{ __('UFR') }}</b></label>
                                   <input id="UFR" type="text" class="form-control" name="UFR"  value="{{$investigation->UFR}}" autocomplete="UFR">
                               </div>
                           </div>  
                       </div>
                       <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                   <label for="FBC" class="form-label mb-1"><b>{{ __('FBC') }}</b></label>
                                   <input id="FBC" type="text" class="form-control" name="FBC" value="{{$investigation->FBC}}" autocomplete="FBC">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                   <label for="FBS" class="form-label mb-1"><b>{{ __('FBS') }}</b></label>
                                   <input id="FBS" type="text" class="form-control" name="FBS" value="{{$investigation->FBS}}" autocomplete="FBS">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">                           
                            <div class="col">
                                <div class="form-group mb-3">
                                   <label for="S_Cr" class="form-label mb-1"><b>{{ __('S_Cr') }}</b></label>
                                   <input id="S_Cr" type="text" class="form-control" name="S_Cr" value="{{$investigation->S_Cr}}" autocomplete="S_Cr">
                                </div>
                            </div>  
                            <div class="col">
                                <div class="form-group mb-3">
                                   <label for="BU" class="form-label mb-1"><b>{{ __('BU') }}</b></label>
                                   <input id="BU" type="text" class="form-control" name="BU" value="{{$investigation->BU}}" autocomplete="BU">
                                </div>
                            </div>                        
                       </div>
                       <div class="row items-center justify-start">                           
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="SE" class="form-label mb-1"><b>{{ __('SE') }}</b></label>
                                   <input id="SE" type="text" class="form-control" name="SE" value="{{$investigation->SE}}" autocomplete="SE">
                               </div>
                           </div>
                          </div>
                        <div class="row items-center justify-start">                          
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="lipid_profile" class="form-label mb-1"><b>{{ __('lipid profile') }}</b></label>
                                    <select id="lipid_profile" class="form-select" name="lipid_profile">
                                        <option selected disabled>Select </option>
                                        <option value="Regular" {{($investigation->lipid_profile=='Normal')? 'selected':''}}>Normal</option>
                                        <option value="Irregular" {{($investigation->lipid_profile=='Upnormal')? 'selected':''}}>Upnormal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="T_Cholestreol" class="form-label mb-1"><b>{{ __('T_Cholestreol') }}</b></label>
                                    <input id="T_Cholestreol" type="number" class="form-control" name="T_Cholestreol" value="{{$investigation->T_Cholestreol}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LDL" class="form-label mb-1"><b>{{ __('LDL') }}</b></label>
                                    <input id="LDL" type="number" step="0.01" class="form-control" name="LDL" value="{{$investigation->LDL}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="HDL" class="form-label mb-1"><b>{{ __('HDL') }}</b></label>
                                    <input id="HDL" type="number" step="0.01" class="form-control" name="HDL" value="{{$investigation->HDL}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="TG" class="form-label mb-1"><b>{{ __('TG') }}</b></label>
                                    <input id="TG" type="number" step="0.01" class="form-control" name="TG" value="{{$investigation->TG}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="ESR" class="form-label mb-1"><b>{{ __('ESR') }}</b></label>
                                    <input id="ESR" type="number" class="form-control" name="ESR" value="{{$investigation->ESR}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="CRP" class="form-label mb-1"><b>{{ __(' CRP') }}</b></label>
                                    <input id="CRP" type="number" step="0.01" class="form-control" name="CRP" value="{{$investigation->CRP}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="OTHER_Investigation" class="form-label mb-1"><b>{{ __('OTHER_Investigation') }}</b></label>
                            <textarea type="text" class="form-control" id="OTHER_Investigation" rows="2" name="OTHER_Investigation">{{ $investigation->OTHER_Investigation}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Referrals" class="form-label mb-1"><b>{{ __('Referrals') }}</b></label>
                            <textarea type="text" class="form-control" id="Referrals" rows="2" name="Referrals">{{ $investigation->Referrals}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Plan_on_discharge" class="form-label mb-1"><b>{{ __('Plan_on_discharge') }}</b></label>
                            <textarea type="text" class="form-control" id="Plan_on_discharge" rows="2" name="Plan_on_discharge">{{ $investigation->Plan_on_discharge}}</textarea>
                        </div>
                        <div class="row items-center justify-start"> 
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Next_appointment" class="form-label mb-1"><b>{{ __('Next_appointment') }}</b></label>
                                    <input id="Next_appointment" type="date" class="form-control" name="Next_appointment" placeholder="mm-dd-yyyy" value="{{$investigation->Next_appointment}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="lx_to_be_done" class="form-label mb-1"><b>{{ __('lx_to_be_done') }}</b></label>
                                    <input id="lx_to_be_done" type="number" class="form-control" name="lx_to_be_done" value="{{$investigation->lx_to_be_done}}">
                                </div>
                            </div> 
                        </div>  
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Investigation') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('investigations.index')}}" style="width: 200px;">
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