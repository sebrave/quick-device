@extends ('layout')

@section ('content')

<h4>{{ $user->name }}'s Devices</h4>
<br/>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Type</th>
            <th>Serial Number</th>
            <th>Model</th>
            <th>Active</th>
            <th>Assigned</th>
            <th>Unassigned</th>
    </thead>
@foreach ($devices as $device)
    <tr>
        <td>{{ $device->type }}</td>
        <td>{{ $device->serial_number }}</td>
        <td>{{ $device->model }}</td>
        <td>
            @if ($device->unassigned_at)
                No
            @else
                Yes
            @endif
        </td>
        <td>{{ $device->created_at }}</td>
        <td>{{ $device->unassigned_at }}</td>
    </tr>
@endforeach
</table>

@endsection
