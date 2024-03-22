@php $module="area" @endphp
@extends('layout.masters')

@section('title')
    
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success">
                <div class="row">
                    <div class="col-md-10 text-dark">
                        <h4>Area Details</h4>
                    </div>
                    <div class="col-md-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArea">
                            {{-- Add Area --}} <i class="fa-regular fa-square-plus"></i>Area
                        </button>
                    </div>
                </div>
            </div>

            @include('flash_data')

            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table table-striped" id="example">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($area as $row)
                                <tr>
                                    <td>{{ $row -> id }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>
                                        <a href="{{ Route('area.edit', ['area' => $row -> id]) }}" class="btn btn-sm btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <!-- Button to trigger the modal -->
                                        <a data-toggle="modal" data-target="#deleteArea{{ $row -> id }}"  class="btn btn-sm btn-danger text-light" ><i class="fa-regular fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="deleteArea{{ $row -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ Route('area.destroy', ['area' => $row -> id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure delete to area 
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
                            <tr>
                                <td>No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $area -> links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <!--Add Area Modal -->
    <div class="modal fade" id="addArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ ROute('area.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Area</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="fomr-label">Area Name</label>
                            <input type="text" name="name" class="form-control" required>
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