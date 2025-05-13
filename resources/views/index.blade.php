@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Couriers</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('couriers.create') }}" class="btn btn-primary mb-3">Add New Courier</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tracking #</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Status</th>
                <th>Weight</th>
                <th>Rate</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($couriers as $courier)
                <tr>
                    <td>{{ $courier->tracking_number }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->sender_name }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->receiver_name }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->origin }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->destination }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->status }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->weight }} kg<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>Rs {{ $courier->rate }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                    <td>{{ $courier->created_at->format('d-m-Y') }}<form action="{{ route('couriers.status.store', $courier->id) }}" method="POST" class="d-flex">
    @csrf
    <select name="status" class="form-select form-select-sm" required>
        <option value="">--Change--</option>
        <option value="Picked">Picked</option>
        <option value="In Transit">In Transit</option>
        <option value="Delivered">Delivered</option>
    </select>
    <button type="submit" class="btn btn-sm btn-success ms-1">Update</button>
</form>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $couriers->links() }} {{-- Laravel pagination --}}
</div>
@endsection
