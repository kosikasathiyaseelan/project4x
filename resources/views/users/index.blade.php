@extends('layouts.app')

@section('content')
<h1 class="text-center">Users</h1>
  <div class="mt-1 mb-4">
    <div class="relative max-w-xs">
      <form action="{{ route('users.search') }}" method="GET">
        <label for="search" class="sr-only">
            Search
        </label>
        <input type="text" name="s"
            class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            placeholder="Search..." />
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
      </form>
  </div>
<hr>

 <!-- success alert message -->
<div class="flex justify-center mt-4">
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
  @endif
</div>

<div class="container mt-2 mb-2 pd-2">
  <a href="{{ route('send.email.view.all') }}" class="btn btn-primary">Send Email To All Users</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User</th>
            <th>Role</th>
            <th scope="col">Email</th>
            <th scope="col">Send Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>
                  @if($user->role=='user')
                      <label class="badge btn-primary">User</label>
                  @elseif($user->role=='doctor')
                      <label class="badge btn-success">Doctor</label>
                  @elseif($user->role=='admin')
                      <label class="badge bg-warning">Admin</label>
                  @else
                      <label class="badge btn-danger">None</label>
                  @endif
                </td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('send.email.view', $user->id) }}" class="btn btn-success">Send  Email</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection