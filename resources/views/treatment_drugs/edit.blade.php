@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update treatment drugs ') }}</div>
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

                    <form action="{{route('treatment_drugs.update' , $treatmentDrug->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$treatmentDrug->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="Date" type="date" class="form-control" name="Date" placeholder="mm-dd-yyyy" value="{{$treatmentDrug->Date}}">
                                </div>
                           </div>
                           <div class="col">
                                <div class="form-group mb-3">
                                <label for="Drug_CCU_HDU_Stay" class="form-label mb-1"><b>{{ __('Drug_CCU_HDU_Stay ') }}</b></label>
                                    <select id="Drug_CCU_HDU_Stay" class="form-select" name="Drug_CCU_HDU_Stay">
                                        <option selected>Select </option>
                                        <option value="Aspirin_EntericCoatedAspirin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Aspirin_EntericCoatedAspirin')? 'selected':''}}>Aspirin_EntericCoatedAspirin</option>
                                        <option value="Clopidogrel" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Clopidogrel')? 'selected':''}}>Clopidogrel</option>
                                        <option value="Atorvastatin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Atorvastatin')? 'selected':''}}>Atorvastatin</option>
                                        <option value="captopril/Enalapril/Losartan" {{($treatmentDrug->Drug_CCU_HDU_Stay=='captopril/Enalapril/Losartan')? 'selected':''}}>captopril/Enalapril/Losartan</option>
                                        <option value="Diltiazem/Amlodipine/Verapamil" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Diltiazem/Amlodipine/Verapamil')? 'selected':''}}>Diltiazem/Amlodipine/Verapamil</option>
                                        <option value="HCT" {{($treatmentDrug->Drug_CCU_HDU_Stay=='HCT')? 'selected':''}}>HCT</option>
                                        <option value="Frusemide" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Frusemide')? 'selected':''}}>Frusemide</option>
                                        <option value="Spiranolactone" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Spiranolactone')? 'selected':''}}>Spiranolactone</option>
                                        <option value="KCL" {{($treatmentDrug->Drug_CCU_HDU_Stay=='KCL')? 'selected':''}}>KCL</option>
                                        <option value="Warfarin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Warfarin')? 'selected':''}}>Warfarin</option>
                                        <option value="Digoxin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Digoxin')? 'selected':''}}>Digoxin</option>
                                        <option value="O_Penicillin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='O_Penicillin')? 'selected':''}}>O_Penicillin</option>
                                        <option value="Amiodarone" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Amiodarone')? 'selected':''}}>Amiodarone</option>
                                        <option value="Metformin" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Metformin')? 'selected':''}}>Metformin</option>
                                        <option value="Gliclazide/Tolbut" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Gliclazide/Tolbut')? 'selected':''}}>Gliclazide/Tolbut</option>
                                        <option value="Mixtard_Insulin_sc" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Mixtard_Insulin_sc')? 'selected':''}}>Mixtard_Insulin_sc</option>
                                        <option value="Thyroxine" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Thyroxine')? 'selected':''}}>Thyroxine</option>
                                        <option value="Omeprazole" {{($treatmentDrug->Drug_CCU_HDU_Stay=='Omeprazole')? 'selected':''}}>Omeprazole</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Frequency" class="form-label mb-1"><b>{{ __('Frequency') }}</b></label>
                                    <select id="Frequency" class="form-select" name="Frequency">
                                        <option selected>Select </option>
                                        <option value="nocte" {{($treatmentDrug->Frequency=='nocte')? 'selected':''}}>nocte</option>
                                        <option value="daily" {{($treatmentDrug->Frequency=='daily')? 'selected':''}}>daily</option>
                                        <option value="mane" {{($treatmentDrug->Frequency=='mane')? 'selected':''}}>mane</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Dosage" class="form-label mb-1"><b>{{ __('Dosage (mg)') }}</b></label>
                                    <input id="Dosage" type="number" step="0.01" class="form-control" name="Dosage" value="{{$treatmentDrug->Dosage}}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Treatment_On_Discharge" class="form-label mb-1"><b>{{ __('Treatment_On_Discharge') }}</b></label>
                                <textarea id="Treatment_On_Discharge" type="text" class="form-control" rows="2" name="Treatment_On_Discharge">{{ $treatmentDrug->Treatment_On_Discharge}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update treatment drugs') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('treatment_drugs.index')}}" style="width: 200px;">
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