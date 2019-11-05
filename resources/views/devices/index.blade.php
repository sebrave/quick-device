@extends ('layout')

@section ('content')

{{ $devices->links() }}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Type</th>
            <th>Serial Number</th>
            <th>IMEI Number</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Operating System</th>
    </thead>
@foreach ($devices as $device)
    <tr>
        <td>{{ $device->type }}</td>
        <td>{{ $device->serial_number }}</td>
        <td>{{ $device->imei_number }}</td>
        <td>{{ $device->manufacturer }}</td>
        <td>{{ $device->model }}</td>
        <td>{{ $device->operating_system }}</td>
    </tr>
@endforeach
</table>

@endsection
