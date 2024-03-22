@extends('layout.masters')

@section('title')
    Customer Category Update
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success text-center">
                        <h4 class="text-dark">Customer Category Update Detail</h4>
                    </div>
                    <div class="card-body mt-4">
                        @foreach ($custCate as $row)
                            
                        @endforeach
                        <form action="{{ Route('custCate.update', ['custCate' => $row -> id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $row -> name }}" class="form-control">
                            </div>
                            <div class="text-center mt-5">
                                <button class="btn btn-sm btn-primary col-6" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection