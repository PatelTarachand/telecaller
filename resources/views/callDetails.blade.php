@extends('layout.masters')

@section('title')
    Call Details
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Call Details</h4>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addCallDetails"><i class="fa-regular fa-square-plus"></i> Call Details</button>
                    </div>
                </div>
            </div>

            @include('flash_data')

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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($callDetails as $row)
                                <tr>
                                    <td>{{ $row -> callId }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>{{ $row -> city }}</td>
                                    <td>{{ $row -> mobileNo }}</td>
                                    <td>{{ $row -> history }}</td>
                                    <td>{{ $row -> remark }}</td>
                                    <td>
                                        <a href="{{ Route('callDetails.edit', [( $row->callId )]) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger"data-toggle="modal" data-target="#delete{{ $row -> callId }}" ><i class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="delete{{ $row -> callId }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ Route('callDetails.destroy', [( $row -> callId )]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure delete to callDetails 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            @empty
                                <tr class="text-center">
                                    <td colspan="8">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $callDetails -> links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <!-- Add call details Modal -->
    <div class="modal fade" id="addCallDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ Route('callDetails.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Call Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="hidden" name="custId" value={{ $id }}>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Call History</label>
                            <input type="date" name="history" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Remark</label>
                            <input type="text" name="remark"  class="form-control" pattern="^[A-Za-z\- ']+$" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection