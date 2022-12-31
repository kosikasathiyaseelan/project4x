@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a investigation for patient') }}</div>
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
                    <form action="{{ route('investigations.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="ECG" class="form-label mb-1"><b>{{ __('ECG') }}</b></label>
                                    <input id="ECG" type="text" class="form-control" name="ECG" autocomplete="ECG">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Troponin_IT" class="form-label mb-1"><b>{{ __('Troponin_IT') }}</b></label>
                                    <input id="Troponin_IT" type="text" class="form-control" name="Troponin_IT" autocomplete="Troponin_IT">
                                </div>
                            </div> 
                        </div>
                            <div class="form-group mb-3">
                                <label for="Upnormal_measurements" class="form-label mb-1"><b>{{ __('Upnormal measurements') }}</b></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="LET" value="1" name="LET">
                                    <label class="form-check-label" for="LET"><b>LET</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="SGOT" value="1" name="SGOT">
                                    <label class="form-check-label" for="SGOT"><b>SGOT</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="SGPT" value="1" name="SGPT">
                                    <label class="form-check-label" for="SGPT"><b>SGPT</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="T_PRO" value="1" name="T_PRO">
                                    <label class="form-check-label" for="T_PRO"><b>T_PRO</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="T_Billrubin" value="1" name="T_Billrubin">
                                    <label class="form-check-label" for="T_Billrubin"><b>T_Billrubin</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="Alb" value="1" name="Alb">
                                    <label class="form-check-label" for="Alb"><b>Alb</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="Glo" value="1" name="Glo">
                                    <label class="form-check-label" for="Glo"><b>Glo</b></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-1" type="checkbox" id="Alp" value="1" name="Alp">
                                    <label class="form-check-label" for="Alp"><b>Alp</b></label>
                                </div>
                            </div>
                        <div class="row items-center justify-start">
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="CXR" class="form-label mb-1"><b>{{ __('CXR') }}</b></label>
                                   <input id="CXR" type="text" class="form-control" name="CXR" autocomplete="CXR">
                               </div>
                           </div>
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="UFR" class="form-label mb-1"><b>{{ __('UFR') }}</b></label>
                                   <input id="UFR" type="text" class="form-control" name="UFR" autocomplete="UFR">
                               </div>
                           </div>
                       </div>
                       <div class="row items-center justify-start">
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="FBC" class="form-label mb-1"><b>{{ __('FBC') }}</b></label>
                                   <input id="FBC" type="text" class="form-control" name="FBC" autocomplete="FBC">
                               </div>
                           </div>
                          </div>
                          <div class="row items-center justify-start">
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="FBS" class="form-label mb-1"><b>{{ __('FBS') }}</b></label>
                                   <input id="FBS" type="text" class="form-control" name="FBS" autocomplete="FBS">
                               </div>
                           </div>
                          </div>
                          <div class="row items-center justify-start">
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="S_Cr" class="form-label mb-1"><b>{{ __('S_Cr') }}</b></label>
                                   <input id="S_Cr" type="text" class="form-control" name="S_Cr" autocomplete="S_Cr">
                               </div>
                           </div>
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="BU" class="form-label mb-1"><b>{{ __('BU') }}</b></label>
                                   <input id="BU" type="text" class="form-control" name="BU" autocomplete="BU">
                               </div>
                           </div>
                       </div>
                       <div class="row items-center justify-start">                           
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="SE" class="form-label mb-1"><b>{{ __('SE') }}</b></label>
                                   <input id="SE" type="text" class="form-control" name="SE" autocomplete="SE">
                               </div>
                           </div>
                          </div>
                        <div class="row items-center justify-start">                             
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="T_Cholestreol" class="form-label mb-1"><b>{{ __('T_Cholestreol') }} (mg/DL)</b></label>
                                    <input id="T_Cholestreol" type="number" step="0.01" class="form-control" name="T_Cholestreol">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LDL" class="form-label mb-1"><b>{{ __('LDL') }} (mg/DL)</b></label>
                                    <input id="LDL" type="number" step="0.01" class="form-control" name="LDL">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="HDL" class="form-label mb-1"><b>{{ __('HDL') }} (mg/DL)</b></label>
                                    <input id="HDL" type="number" step="0.01" class="form-control" name="HDL">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="TG" class="form-label mb-1"><b>{{ __('TG') }}(mg/DL)</b></label>
                                    <input id="TG" type="number" step="0.01" class="form-control" name="TG">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="ESR" class="form-label mb-1"><b>{{ __('ESR') }} (mm/hr)</b></label>
                                    <input id="ESR" type="number" class="form-control" name="ESR">
                            </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="CRP" class="form-label mb-1"><b>{{ __(' CRP') }}(mg/L)</b></label>
                                    <input id="CRP" type="number" step="0.01" class="form-control" name="CRP">
                                </div>
                            </div>                            
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="lipid_profile" class="form-label mb-1"><b>{{ __('lipid profile') }}</b></label>
                                    <select id="lipid_profile" class="form-select" name="lipid_profile">
                                        <option selected>Select </option>
                                        <option value="Regular">Normal</option>
                                        <option value="Irregular">Upnormal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="OTHER_Investigation" class="form-label mb-1"><b>{{ __('OTHER_Investigation') }}</b></label>
                            <textarea type="text" class="form-control" id="OTHER_Investigation" rows="2" name="OTHER_Investigation"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Referrals" class="form-label mb-1"><b>{{ __('Referrals') }}</b></label>
                            <textarea type="text" class="form-control" id="Referrals" rows="2" name="Referrals"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Plan_on_discharge" class="form-label mb-1"><b>{{ __('Plan_on_discharge') }}</b></label>
                            <textarea type="text" class="form-control" id="Plan_on_discharge" rows="2" name="Plan_on_discharge"></textarea>
                        </div>
                        <div class="row items-center justify-start"> 
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Next_appointment" class="form-label mb-1"><b>{{ __('Next_appointment') }}</b></label>
                                    <input id="Next_appointment" type="date" class="form-control" name="Next_appointment" placeholder="mm-dd-yyyy">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="lx_to_be_done" class="form-label mb-1"><b>{{ __('lx_to_be_done') }}</b></label>
                                    <input id="lx_to_be_done" type="number" class="form-control" name="lx_to_be_done">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create Investigation') }}
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