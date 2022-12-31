@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Cardio Thoracic Clinic</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('cardio_thoracic_clinics.create')}}" class="btn btn-success">ADD CARDIO THORACIC CLINIC</a>
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
                        <caption>List of patient's cardio thoracic clinic details</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Done By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($cardio_thoracic_clinics) > 0)
                            @foreach($cardio_thoracic_clinics as $cardio_thoracic_clinic)
                            <tr class="table-info">
                                <td>{{$cardio_thoracic_clinic->patient_id}}</td>
                                <td>{{$cardio_thoracic_clinic->date}}</td>
                                <td>{{$cardio_thoracic_clinic->time}}</td>
                                <td>{{$cardio_thoracic_clinic->done_by}}</td>
                                <td>
                                    <form action="{{route('cardio_thoracic_clinics.destroy' , $cardio_thoracic_clinic->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('cardio_thoracic_clinics.show', $cardio_thoracic_clinic->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('cardio_thoracic_clinics.edit', $cardio_thoracic_clinic->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$cardio_thoracic_clinics->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection