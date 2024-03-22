@php $module="customerDetails" @endphp
@extends('layout.masters')

@section('title')
    Customer Details
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-success">
                <h4>Customer Details</h4>
            </div>
            
            @include('flash_data')

            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table table-striped"  id="myDataTable">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Invoice</th>
                                <th>Call Details</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customer as $row)
                                <tr>
                                    <td>{{ $row -> id }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>{{ $row -> email }}</td>
                                    <td>{{ $row -> mobileNo }}</td>
                                    <td><a href="{{ url('invoice',['id'=>$row->id]) }}" class="btn btn-sm btn-primary"><i class="fa-regular fa-file-lines"></i></a></td>
                                    <td>
                                        <a href="{{ route('customerId.id', ['id' => $row->id]) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-phone"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ Route('customer.show' ,['customer' => $row -> id] ) }}" class="btn btn-sm btn-info"> <i class="fa-solid fa-eye-slash"></i> </a>
                                    </td>
                                    <td>
                                        <a href="{{ Route('customer.edit' ,['customer' => $row -> id] ) }}" class="btn btn-sm btn-warning"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                    </td>
                                    <td>
                                        <button  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $row -> id }}"><i class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="delete{{ $row -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ Route('customer.destroy', ['customer' => $row -> id] ) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you want to delete Customer Detail
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="Submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{-- $customer->links('pagination::bootstrap-5') --}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection