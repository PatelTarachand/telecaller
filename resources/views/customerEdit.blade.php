@extends('layout.masters')

@section('title')
    Customer Details Update
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-success text-center">
                <h4 class="text-dark">Update Customer Details</h4>
            </div>

            @include('flash_data')
            @if ($errors -> any())
                <ul class="bg-warning">
                    @foreach ($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @foreach ($customer as $row)
                
            @endforeach

            <div class="card-body">
                <form action="{{ Route('customer.update', ['customer' => $row -> id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col"><!-- First column -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{ $row -> name }}" type="text" class="form-control" name="name" id="name" placeholder="Name" >
                            </div>
        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="{{ $row -> email }}" type="email" class="form-control" name="email" id="email" placeholder="Email" >
                            </div>
        
                            <div class="form-group">
                                <label for="Mobile_no">Mobile No.</label>
                                <input value="{{ $row -> mobileNo }}" type="text" class="form-control" name="mobileNo" id="Mobile_no" placeholder="Mobile No" >
                            </div>
        
                            <div class="form-group">
                                <label for="telphone">Telephone No</label>
                                <input value="{{ $row -> telephone }}" type="text" class="form-control" name="telephone" id="telphone" placeholder="telephone No" >
                            </div>
        
                            <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control" id="address" placeholder="Address" cols="5" >{{ $row -> address }}</textarea>
                            </div>
        
                            <div class="form-group">
                                <label for="area">Area</label>
                                <select class="form-control" id="area" name="area" > <!--name="area"-->
                                    <option value="">Select any Area</option>
                                    @foreach ($area as $row1)
                                        <option value="{{ $row1 -> id }}" {{ $row->area == $row1->id ? 'selected' : '' }}>{{ $row1 -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="city">City</label>
                                <input value="{{ $row ->  id}}" type="text" class="form-control" name="city" id="city" placeholder="City" pattern="^[A-za-z\- ']+$">
                            </div>
        
                            <div class="form-group">
                                <label for="district">District</label>
                                <select class="form-select form-control" id="district"  name="district">
                                <option>Slect District</option>
                                @foreach ($district as $row2)
                                    <option value="{{ $row2 -> id }}" {{ $row->district == $row2->id ? 'selected' : '' }}>{{ $row2 -> name }}</option>
                                @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="customer_category">Customer Category</label>
                                <select class="form-control" id="customer_category" name="customerCategory" ><!-- name="customer_category" -->
                                    <option>Select Customer Category</option>
                                    @foreach ($customerCategory as $row3)
                                        <option value="{{ $row3 -> id }}" {{ $row->customerCategory == $row3->id ? 'selected' : '' }}>{{ $row3 -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="customer_type">Customer type</label>
                                <select class="form-control" id="customer_type" name="customerType" ><!--name="customer_type"-->
                                <option>Select Customer Type</option>
                                @foreach ($customerType as $row4)
                                    <option value="{{ $row4 -> id }}" {{ $row->customerType == $row4->id ? 'selected' : '' }}>{{ $row4 -> name }}</option>
                                @endforeach
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label for="last_biling">Last Biling</label>
                                <input value="{{ $row -> lastBilling }}" type="date" class="form-control" name="lastBilling" id="last_biling" placeholder="Last Biling" >
                            </div>
                            
                            <div class="form-group">
                                <label for="balance">Balance Amount</label>
                                <input value="{{ $row -> balance }}" type="number" class="form-control" name="balance" id="balance" placeholder="Balance" >
                            </div>
        
                        </div>
        
                        <!-- Second column --> 
                        <div class="col"> 
        
                            <div class="form-group">
                                <label for="payterm">Payment Terms</label>
                                <input value="{{ $row -> payterm }}" type="text" class="form-control" name="payTerm" id="payterm" placeholder="Payment Term" >
                            </div>
        
                            <div class="form-group">
                                <label for="call_person">Calling Person</label>
                                <input value="{{ $row ->  callPerson}}" type="text" class="form-control" name="callPerson" id="call_person" placeholder="Calling Person">
                            </div>
        
                            <div class="form-group">
                                <label for="call_date">Calling date</label>
                                <input value="{{ $row ->  callDate}}" type="datetime-local" class="form-control" name="callDate" id="call_date" placeholder="calling date" >
                            </div>
        
                            <div class="form-group">
                            <label for="call_purpose">Calling Purpose</label>
                                <input value="{{ $row ->  callPurpose}}" type="text" class="form-control" name="callPurpose" id="call_purpose" placeholder="Calling Purpose" >
                            </div>
                            
                            <div class="form-group">
                                <label for="call_responce">Calling Response </label>
                                <input value="{{ $row ->  callResponse }}" type="text" class="form-control" name="callResponse" id="call_responce" placeholder="Call Responce" pattern="^[A-za-z\- ']+$">
                            </div>
        
                            <div class="form-group">
                                <label for="old_responce">Old Response</label>
                                <input value="{{ $row ->  oldResponse }}" type="text" class="form-control" name="oldResponse" id="old_responce" placeholder="Old Responce Filling By Admin" pattern="^[A-za-z\- ']+$">
                            </div>
                            
                            <div class="form-group">
                                <label for="action">Action</label>
                                <input value="{{ $row -> action }}" type="text" class="form-control" name="action" id="action" placeholder="Action" >
                            </div>
                            
                            <div class="form-group">
                                <label for="next_plan">Next Planned To Call</label>
                                <input value="{{ $row -> nextPlan }}" type="text" class="form-control" name="nextPlan" id="next_plan" placeholder="Next Planned To Call" >
                            </div>
        
                            <div class="form-group">
                                <label for="time_to_call">Time To Call</label>
                                <input value="{{ $row -> timeToCall }}" type="text" class="form-control" name="timeToCall" id="time_to_call" placeholder="Time To Call" >
                            </div>
                            
                            <div class="form-group">
                                <label for="compatitor">Competitor</label>
                                <input value="{{ $row -> competitor }}" type="text" class="form-control" name="competitor" id="compatitor" placeholder="Competitor" pattern="^[A-za-z\- ']+$">
                            </div>
        
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input value="{{ $row -> amount }}" type="number" class="form-control" name="amount" id="amount" placeholder="Amount" >
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary col-6" type="submit"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection