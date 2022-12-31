@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Investigations Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('investigations.create')}}" class="btn btn-success">ADD Investigation</a>
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
                        <caption>List of Investigations</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>ECG</th>
                                <th>Troponin IT</th>
                                <th>Lipid Profile</th>
                                <th>Other Investigation</th>
                                <th>Plan on Discharge</th>
                                <th>Next Appointment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($investigations) > 0)
                            @foreach($investigations as $investigation)
                            <tr class="table-info">
                                <td>{{$investigation->patient_id}}</td>
                                <td>{{$investigation->ECG}}</td>
                                <td>{{$investigation->Troponin_IT}}</td>
                                <td>{{$investigation->lipid_profile}}</td>
                                <td>{{$investigation->OTHER_Investigation}}</td>
                                <td>{{$investigation->Plan_on_discharge}}</td>
                                <td>{{$investigation->Next_appointment}}</td>
                                <td>
                                <form action="{{route('investigations.destroy' , $investigation->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('investigations.show', $investigation->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('investigations.edit', $investigation->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$investigations->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection