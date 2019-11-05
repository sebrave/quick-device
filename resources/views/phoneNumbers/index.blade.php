@extends ('layout')

@section ('content')

{{ $phoneNumbers->links() }}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Phone Number</th>
            <th>Network Provider</th>
        </tr>
    </thead>
@foreach ($phoneNumbers as $phoneNumber)
    <tr>
        <td>{{ $phoneNumber->phone_number }}</td>
        <td>{{ $phoneNumber['networkProvider']['name'] }}</td>
    </tr>
@endforeach
</table>

@endsection
