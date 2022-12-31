@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Inward Admission Summary</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('inward_admission_summaries.create')}}" class="btn btn-success">ADD INWARD ADMISSION SUMMARY</a>
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
                        <caption>List of patient's inward admission summary</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>DOA</th>
                                <th>DOD</th>
                                <th>Reason For Admission</th>
                                <th>Acute Problem</th>
                                <th>Pulse</th>
                                <th>BP</th>
                                <th>Special Treatment</th>
                                <th>Treatment on Discharge</th>
                                <th>Actions</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($inward_admission_summaries) > 0)
                            @foreach($inward_admission_summaries as $inward_admission_summary)
                            <tr class="table-info">
                                <td>{{$inward_admission_summary->patient_id}}</td>
                                <td>{{$inward_admission_summary->DOA}}</td>
                                <td>{{$inward_admission_summary->DOD}}</td>
                                <td>{{$inward_admission_summary->Reason_For_Admission}}</td>
                                <td>{{$inward_admission_summary->Acute_Problem}}</td>
                                <td>{{$inward_admission_summary->Pulse}}</td>
                                <td>{{$inward_admission_summary->BP}}</td>
                                <td>{{$inward_admission_summary->Special_Treatment}}</td>
                                <td>{{$inward_admission_summary->Treatment_on_Discharge}}</td>
                                <td>
                                    <form action="{{route('inward_admission_summaries.destroy' , $inward_admission_summary->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('inward_admission_summaries.show', $inward_admission_summary->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('inward_admission_summaries.edit', $inward_admission_summary->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$inward_admission_summaries->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection