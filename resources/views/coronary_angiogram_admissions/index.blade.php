@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Coronary Angiogram Admissions</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('coronary_angiogram_admissions.create')}}" class="btn btn-success">ADD CORONARY ANGIOGRAM ADMISSION</a>
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
                        <caption>List of patient's coronary angiogram admissions</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Testing Date</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Appointment Ward</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($coronary_angiogram_admissions) > 0)
                            @foreach($coronary_angiogram_admissions as $coronary_angiogram_admission)
                            <tr class="table-info">
                                <td>{{$coronary_angiogram_admission->patient_id}}</td>
                                <td>{{$coronary_angiogram_admission->testing_date}}</td>
                                <td>{{$coronary_angiogram_admission->appointment_date}}</td>
                                <td>{{$coronary_angiogram_admission->appointment_time}}</td>
                                <td>{{$coronary_angiogram_admission->appointment_ward}}</td>
                                <td>
                                    <form action="{{route('coronary_angiogram_admissions.destroy' , $coronary_angiogram_admission->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('coronary_angiogram_admissions.show', $coronary_angiogram_admission->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('coronary_angiogram_admissions.edit', $coronary_angiogram_admission->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$coronary_angiogram_admissions->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection