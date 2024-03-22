@extends('layout.masters')

@section('content')
    @foreach ($area as $row)
        
    @endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-center">
                        <h4 class="text-dark">Edit Area Detail</h4>
                    </div>
                    <div class="card-body mt-4">
                        <form action="{{ Route('area.update', ['area' => $row -> id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="fomr-label">Area Name</label>
                                <input type="text" name="name" class="form-control" pattern="^[A-Za-z\- ']+$" value="{{ $row -> name }}">
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-sm btn-primary col-6">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection