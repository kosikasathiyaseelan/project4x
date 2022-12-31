@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Patient Emergency Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('emergencies.create')}}" class="btn btn-success">ADD EMERGENCY DETAILS</a>
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
                        <caption>List of patient's emergency details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Informed Person Name</th>
                                <th>Relationship</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($emergencies) > 0)
                            @foreach($emergencies as $emergency)
                            <tr class="table-info">
                                <td>{{$emergency->patient_id}}</td>
                                <td>{{$emergency->name}}</td>
                                <td>{{$emergency->relationship}}</td>
                                <td>{{$emergency->address}}</td>
                                <td>{{$emergency->contact_no}}</td>
                                <td>
                                    <form action="{{route('emergencies.destroy' , $emergency->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('emergencies.show', $emergency->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('emergencies.edit', $emergency->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$emergencies->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection