@extends ('layout')

@section ('content')

{{ $simCards->links() }}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Sim Number</th>
            <th>Network Provider</th>
        </tr>
    </thead>
@foreach ($simCards as $simCard)
    <tr>
        <td>{{ $simCard->sim_number }}</td>
        <td>{{ $simCard['networkProvider']['name'] }}</td>
    </tr>
@endforeach
</table>

@endsection
