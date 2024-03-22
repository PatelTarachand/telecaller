@php $module="custCate" @endphp
@extends('layout.masters')

@section('title')
    
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success">
                <div class="row">
                    <div class="col-md-9 text-dark">
                        <h4>Customer Category Details</h4>
                    </div>
                    <div class="col-md-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCustomerCategory">
                            <i class="fa-regular fa-square-plus"></i> Customer Category
                        </button>
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
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($custCate as $row)
                                <tr>
                                    <td>{{ $row -> id }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>
                                        <a href="{{ Route('custCate.edit', ['custCate' => $row -> id]) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <button  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $row -> id }}"><i class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <!-- Add Customer Category -->
                                <div class="modal fade" id="delete{{ $row -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ Route('custCate.destroy', [($row -> id)]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Customer Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure delete customer category details
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $custCate -> links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <!-- Add Customer Category -->
    <div class="modal fade" id="addCustomerCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ Route('custCate.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Customer Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection