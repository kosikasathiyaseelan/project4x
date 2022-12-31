@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Permanent Pace Maker Details</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('permanent_pace_makers.create')}}" class="btn btn-success">ADD PERMANENT PACE MAKER</a>
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
                        <caption>List of patient's permanent pace maker details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Cath No</th>
                                <th>Indication</th>
                                <th>Done By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($permanent_pace_makers) > 0)
                            @foreach($permanent_pace_makers as $permanent_pace_maker)
                            <tr class="table-info">
                                <td>{{$permanent_pace_maker->patient_id}}</td>
                                <td>{{$permanent_pace_maker->date}}</td>
                                <td>{{$permanent_pace_maker->cath_no}}</td>
                                <td>{{$permanent_pace_maker->indication}}</td>
                                <td>{{$permanent_pace_maker->done_by}}</td>
                                <td>
                                    <form action="{{route('permanent_pace_makers.destroy' , $permanent_pace_maker->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('permanent_pace_makers.show', $permanent_pace_maker->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('permanent_pace_makers.edit', $permanent_pace_maker->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$permanent_pace_makers->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
