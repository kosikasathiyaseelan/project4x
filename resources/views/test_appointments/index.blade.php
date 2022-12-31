@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Test Appointments</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('test_appointments.create')}}" class="btn btn-success">ADD Test Appointment</a>
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
                        <caption>List of patient's Test appointments</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Special Investication</th>
                                <th>Date</th>
                                <th>Time</th>
                                
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($test_appointments) > 0)
                            @foreach($test_appointments as $test_appointment)
                            <tr class="table-info">
                                <td>{{$test_appointment->patient_id}}</td>
                                <td>{{$test_appointment->Special_Investication}}</td>
                                <td>{{$test_appointment->Date}}</td>
                                <td>{{$test_appointment->Time}}</td>
                                
                                <td>
                                    <form action="{{route('test_appointments.destroy' , $test_appointment->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('test_appointments.show', $test_appointment->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('test_appointments.edit', $test_appointment->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$test_appointments->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection