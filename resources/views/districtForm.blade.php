@php $module="district" @endphp
@extends('layout.masters')

@section('title')
    
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-success">
            <div class="row">
                <div class="col-md-10">
                    <h4>District Details</h4>
                </div>
                <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDistrict">
                        <i class="fa-regular fa-square-plus"></i>  District
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
                        @forelse ($district as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ $row -> name }}</td>
                                <td>
                                    <a href="{{ Route('district.edit', ['district' => $row -> id]) }}" class="btn btn-sm btn-info" ><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <!-- Button to trigger the delete modal -->
                                    <button  data-toggle="modal" data-target="#delete{{ $row -> id }}"  class="btn btn-sm btn-danger text-light" ><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <!--Confirm Delete Area Modal -->
                            <div class="modal fade" id="delete{{ $row -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{ Route('district.destroy', ['district' => $row -> id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                are you sure delete district
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
            {{ $district -> links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

<!--Add Area Modal -->
<div class="modal fade" id="addDistrict" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ Route('district.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add District</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="fomr-label">District Name</label>
                        <input type="text" name="name" class="form-control"  required>
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