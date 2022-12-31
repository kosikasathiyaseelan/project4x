@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Procedure Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('procedures.create')}}" class="btn btn-success">ADD PROCEDURE</a>
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
                        <caption>List of patient's procedure details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Side</th>
                                <th>Access</th>
                                <th>Leads</th>
                                <th>Type</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($procedures) > 0)
                            @foreach($procedures as $procedure)
                            <tr class="table-info">
                                <td>{{$procedure->patient_id}}</td>
                                <td>{{$procedure->side}}</td>
                                <td>{{$procedure->access}}</td>
                                <td>{{$procedure->leads}}</td>
                                <td>{{$procedure->procedure_type}}</td>
                                <td>{{$procedure->position}}</td>
                                <td>
                                    <form action="{{route('procedures.destroy' , $procedure->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('procedures.show', $procedure->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('procedures.edit', $procedure->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$procedures->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
