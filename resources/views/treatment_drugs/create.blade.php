
    @extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a Treatment Drug Details for patient') }}</div>
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
                    <form action="{{ route('treatment_drugs.store') }}" method="post">
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
                                    <label for="Date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="Date" type="date" class="form-control" name="Date" placeholder="mm-dd-yyyy">
                                </div>
                           </div>
                           <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Drug_CCU_HDU_Stay" class="form-label mb-1"><b>{{ __('Drug_CCU_HDU_Stay ') }}</b></label>
                                    <select id="Drug_CCU_HDU_Stay" class="form-select" name="Drug_CCU_HDU_Stay">
                                        <option selected>Select </option>
                                        <option value="Aspirin_EntericCoatedAspirin">Aspirin_EntericCoatedAspirin</option>
                                        <option value="Clopidogrel">Clopidogrel</option>
                                        <option value="Atorvastatin">Atorvastatin</option>
                                        <option value="captopril/Enalapril/Losartan">captopril/Enalapril/Losartan</option>
                                        <option value="Diltiazem/Amlodipine/Verapamil">Diltiazem/Amlodipine/Verapamil</option>
                                        <option value="HCT">HCT</option>
                                        <option value="Frusemide">Frusemide</option>
                                        <option value="Spiranolactone">Spiranolactone</option>
                                        <option value="KCL">KCL</option>
                                        <option value="Warfarin">Warfarin</option>
                                        <option value="Digoxin">Digoxin</option>
                                        <option value="O_Penicillin">O_Penicillin</option>
                                        <option value="Amiodarone">Amiodarone</option>
                                        <option value="Metformin">Metformin</option>
                                        <option value="Gliclazide/Tolbut">Gliclazide/Tolbut</option>
                                        <option value="Mixtard_Insulin_sc">Mixtard_Insulin_sc</option>
                                        <option value="Thyroxine">Thyroxine</option>
                                        <option value="Omeprazole">Omeprazole</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                <label for="Frequency" class="form-label mb-1"><b>{{ __('Frequency') }}</b></label>
                                    <select id="Frequency" class="form-select" name="Frequency">
                                        <option selected>Select </option>
                                        <option value="nocte">nocte</option>
                                        <option value="daily">daily</option>
                                        <option value="mane">mane</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Dosage" class="form-label mb-1"><b>{{ __('Dosage (mg)') }}</b></label>
                                    <input id="Dosage" type="number" step="0.01" class="form-control" name="Dosage">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Treatment_On_Discharge" class="form-label mb-1"><b>{{ __('Treatment_On_Discharge') }}</b></label>
                                <textarea type="text" class="form-control" id="Treatment_On_Discharge" rows="2" name="Treatment_On_Discharge"></textarea>
                            </div>
                        </div>  
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create Treatment Drugs Details') }}
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