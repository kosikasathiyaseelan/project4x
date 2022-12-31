@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Clinic Visits</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('clinic_visits.create')}}" class="btn btn-success">ADD CLINIC VISIT</a>
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
                        <caption>List of patient's clinic visits</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Complaint</th>
                                <th>Pulse Rate</th>
                                <th>Blood Pressure</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($clinic_visits) > 0)
                            @foreach($clinic_visits as $clinic_visit)
                            <tr class="table-info">
                                <td>{{$clinic_visit->patient_id}}</td>
                                <td>{{$clinic_visit->date}}</td>
                                <td>{{$clinic_visit->complaint}}</td>
                                <td>{{$clinic_visit->PR}}</td>
                                <td>{{$clinic_visit->BP}}</td>
                                <td>
                                    <form action="{{route('clinic_visits.destroy' , $clinic_visit->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('clinic_visits.show', $clinic_visit->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('clinic_visits.edit', $clinic_visit->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$clinic_visits->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection