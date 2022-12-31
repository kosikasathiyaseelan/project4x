@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Patient Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('patients.create')}}" class="btn btn-success">ADD PATIENT</a>
                    </div>
                    <!-- success alert message -->
                    <div class="flex justify-center mt-3">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                        @endif
                    </div>

                    <!-- table -->
                    <table class="table table-lg table-hover mx-4">
                        <caption>List of patients</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Clinic No</th>
                                <th>Case No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($patients) > 0)
                            @foreach($patients as $patient)
                            <tr class="table-info">
                                <td>{{$patient->clinic_no}}</td>
                                <td>{{$patient->case_no}}</td>
                                <td>{{$patient->name}}</td>
                                <td>{{$patient->address}}</td>
                                <td>{{$patient->gender}}</td>
                                <td>
                                    <form action="{{route('patients.destroy' , $patient->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('patients.show', $patient->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('patients.edit', $patient->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$patients->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection