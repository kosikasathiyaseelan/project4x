@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient permanent pace maker') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$permanent_pace_maker->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$permanent_pace_maker->date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Cath No</b></label>
                        <div class="col">: {{$permanent_pace_maker->cath_no}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Indication</b></label>
                        <div class="col">: {{$permanent_pace_maker->indication}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Done By</b></label>
                        <div class="col">: {{$permanent_pace_maker->done_by}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('permanent_pace_makers.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection