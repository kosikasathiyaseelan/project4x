@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Pace Maker Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('pace_makers.create')}}" class="btn btn-success">ADD PACE MAKER</a>
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
                        <caption>List of patient's pace maker details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Sensing and Pacing</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($pace_makers) > 0)
                            @foreach($pace_makers as $pace_maker)
                            <tr class="table-info">
                                <td>{{$pace_maker->patient_id}}</td>
                                <td>{{$pace_maker->type}}</td>
                                <td>{{$pace_maker->date}}</td>
                                <td>{{$pace_maker->sensing_and_pacing}}</td>
                                <td>
                                    <form action="{{route('pace_makers.destroy' , $pace_maker->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('pace_makers.show', $pace_maker->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('pace_makers.edit', $pace_maker->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$pace_makers->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
