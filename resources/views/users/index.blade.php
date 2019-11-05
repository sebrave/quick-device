@extends ('layout')

@section ('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th></th>
    </thead>
@foreach ($users as $user)
    <tr>
        <td><a href="/user/{{ $user->id }}" style="color:black !important;">
            {{ $user->name }}</a></td>
        <td>{{ $user->email }}</td>
    </tr>
@endforeach
</table>

@endsection
