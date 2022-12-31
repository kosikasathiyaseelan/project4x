@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Treatment Drugs Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('treatment_drugs.create')}}" class="btn btn-success">ADD TreatmentDrug</a>
                    </div>
                    <!-- success alert message -->
                    <div class="flex justify-center mt-4">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                        @endif
                    </div>

                    <!-- table -->
                    <table class="table table-lg table-hover mx-4">
                        <caption>List of patient's Treatmentdrug Details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Drug_CCU_HDU_Stay</th>
                                <th>Dosage</th>
                                <th>Frequency</th>
                                <th>Treatment_On_Discharge</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($treatment_drugs) > 0)
                            @foreach($treatment_drugs as $treatment_drug)
                            <tr class="table-info">
                                <td>{{$treatment_drug->patient_id}}</td>
                                <td>{{$treatment_drug->Date}}</td>
                                <td>{{$treatment_drug->Drug_CCU_HDU_Stay}}</td>
                                <td>{{$treatment_drug->Dosage}}</td>
                                <td>{{$treatment_drug->Frequency}}</td>
                                <td>{{$treatment_drug->Treatment_On_Discharge}}</td>
                                
                                <td>
                                    <form action="{{route('treatment_drugs.destroy' , $treatment_drug->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('treatment_drugs.show', $treatment_drug->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('treatment_drugs.edit', $treatment_drug->id)}}" class="btn btn-warning mr-2">UPDATE</a>
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this data?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No Data Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="row mx-2">{{$treatment_drugs->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection