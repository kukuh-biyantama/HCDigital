@extends('layout.app')

@section('content')
<div class="container" style="margin-top: 5%;">
    <h1>Users (SuperAdmin View)</h1>
    <a href="{{ route('superusers.create') }}" class="btn btn-primary">Add User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('superusers.edit', $user) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('superusers.destroy', $user) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection