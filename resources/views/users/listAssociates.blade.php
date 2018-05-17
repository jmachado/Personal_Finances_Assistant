@extends('layouts.app')

@section('content')

@if (count($users))
<div class="container">
    <h3>
        @if ($users->total() == 1)
            {{ $users->total() }} User
        @else
            {{ $users->total() }} Users
        @endif
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    User name
                </th>
                <th>
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\User::find(Auth::user()->id)->associatedMembers as $user)
            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<h2>
    No users found
</h2>
@endif
@endsection
