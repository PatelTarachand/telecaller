@extends('layout.masters')

@section('title')
    Edit District
@endsection

@section('content')
    @foreach ($district as $row)
        
    @endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-center">
                        <h4 class="text-dark">Edit District Detail</h4>
                    </div>
                    <div class="card-body mt-4">
                        <form action="{{ Route('district.update', ['district' => $row -> id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $row -> name }}" class="form-control">
                            </div>
                            <div class="text-center mt-5">
                                <button class="btn btn-sm btn-primary col-6" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection