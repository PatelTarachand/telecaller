@extends('layout.masters')

@section('title')
    Edit Call Details
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-success">
                        Edit Call Detail
                    </div>

                    @include('flash_data')
                    @foreach ($callDetails as $row)
                        
                    @endforeach

                    <div class="card-body">
                        <form action="{{ Route('callDetails.update', [($row -> callId)]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="hidden" name="custId" value="{{ $row -> custId }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">History</label>
                                <input type="date" name="history" value="{{ $row -> history }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Remark</label>
                                <input type="text" name="remark" value="{{ $row -> remark }}" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-sm-btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection