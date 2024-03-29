@extends('layouts.app')
@section('content')

@if (count($accounts))
<div class="container">
    <h3>
        @if ($accounts->count() == 1)
            {{ $accounts->count() }} Account
        @else
            {{ $accounts->count() }} Accounts
        @endif
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Code
                </th>
                <th>
                    Account Type
                </th>
                <th>
                    Current Balance
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
            <tr>
                <td>
                    {{ $account->code }}
                </td>
                <td>
                    {{ $account->name }}
                </td>
                <td>
                    {{ $account->current_balance }}
                </td>
                <td>
                    <form action="{{ action('AccountController@close', $account->id) }}" method="post" class="inline">
                        @csrf
                        @method('patch')
                        <input type="submit" class="btn btn-xs btn-danger" value="Close Account">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="container">
    <h2>
        No opened accounts found
    </h2>
</div>
@endif
@endsection