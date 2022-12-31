@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">ETT Appointments</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('ett_appointments.create')}}" class="btn btn-success">ADD ETT Appointment</a>
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
                        <caption>List of patient's ETT Appointment</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>MO_Cardiology</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($ett_appointments) > 0)
                            @foreach($ett_appointments as $ett_appointment)
                            <tr class="table-info">
                                <td>{{$ett_appointment->patient_id}}</td>
                                <td>{{$ett_appointment->Date}}</td>
                                <td>{{$ett_appointment->MO_Cardiology}}</td>
                               
                                <td>
                                    <form action="{{route('ett_appointments.destroy' , $ett_appointment->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('ett_appointments.show', $ett_appointment->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('ett_appointments.edit', $ett_appointment->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$ett_appointments->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection