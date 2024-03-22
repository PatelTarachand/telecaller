@php $module="allCall" @endphp
@extends('layout.masters')

@section('title')
    All Call Details
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-center">
                <h4>All Call Details</h4>
            </div>
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Mobile</th>
                                <th>History</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allCall as $row)
                                <tr>
                                    <td>{{ $row -> callId }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>{{ $row -> city }}</td>
                                    <td>{{ $row -> mobileNo }}</td>
                                    <td>{{ $row -> history }}</td>
                                    <td>{{ $row -> remark }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $allCall -> links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection