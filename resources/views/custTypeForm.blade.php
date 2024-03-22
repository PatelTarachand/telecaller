@php $module="custType" @endphp
@extends('layout.masters')

@section('title')
    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <strong class="card-header bg-success text-light">
                        <div class="row">
                            <div class="col-md-9">
                                <h4>Customer Type Details</h4>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCustType">
                                    <i class="fa-regular fa-square-plus"></i> Cutomer Category
                                </button>
                            </div>
                        </div>
                    </strong>

                    @include('flash_data')

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead class="bg-secondary text-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($custType as $row)
                                        <tr>
                                            <td>{{ $row -> id }}</td>
                                            <td>{{ $row -> name }}</td>
                                            <td>
                                                <a href="{{ Route('custType.edit', ['custType' => $row -> id]) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $row -> id }}"><i class="fa-regular fa-trash-can"></i></button>
                                            </td>
                                        </tr>
                                        <!--Add Customer Type Modal -->
                                        <div class="modal fade" id="delete{{ $row -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ Route('custType.destroy', [($row -> id)]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel">Confirm Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure delete custumer type
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
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $custType -> links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Add Customer Type Modal -->
    <div class="modal fade" id="addCustType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ Route('custType.store', ['custType' => $row -> id]) }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Add Customer Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" pattern="^[A-Za-z/- ']+$" required>
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