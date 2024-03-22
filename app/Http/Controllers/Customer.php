<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class Customer extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = DB::table('customer') -> paginate('2');
        return view('customerDetails', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $area = DB::select("SELECT * FROM `area` ");
        $district = DB::select("SELECT * FROM `district` ");
        $customerCategory = DB::select("SELECT * FROM `customerCategory` ");
        $customerType = DB::select("SELECT * FROM `customerType` ");
        return view('customerForm', compact('area', 'district', 'customerCategory', 'customerType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customer,email',
            'mobileNo' => 'required|min:10|max:10',
            'telephone' => 'min:10|max:10',
            'address' => 'required',
            'city' => 'required',
            'lastBilling' => 'required',
            'payTerm' => 'required',
            'callPerson' => 'required',
            'callDate' => 'required',
            'callPurpose' => 'required',
            'callResponse' => 'required',
            'competitor' => 'required',
        ]);

        $D = DB::table('customer') -> insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobileNo' => $request['mobileNo'],
            'telephone' => $request['telephone'],
            'address' => $request['address'],
            'area' => $request['area'],
            'city' => $request['city'],
            'district' => $request['district'],
            'customerCategory' => $request['customerCategory'],
            'customerType' => $request['customerType'],
            'lastBilling' => $request['lastBilling'],
            'balance' => $request['balance'],

            'payTerm' => $request['payTerm'],
            'callPerson' => $request['callPerson'],
            'callDate' => $request['callDate'],
            'callPurpose' => $request['callPurpose'],
            'callResponse' => $request['callResponse'],
            'oldResponse' => $request['oldResponse'],
            'action' => $request['action'],
            'nextPlan' => $request['nextPlan'],
            'timeToCall' => $request['timeToCall'],
            'competitor' => $request['competitor'],
            'amount' => $request['amount'],
        ]);

        Return redirect() -> Route('userForm.index') -> with('success', 'Form submitted suucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = DB::select("SELECT * FROM `customer` WHERE `id` = $id ");
        $area = DB::select("SELECT * FROM `area` ");
        $district = DB::select("SELECT * FROM `district` ");
        $customerCategory = DB::select("SELECT * FROM `customerCategory` ");
        $customerType = DB::select("SELECT * FROM `customerType` ");
        return view('customerShow', compact('customer', 'area', 'district', 'customerCategory', 'customerType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = DB::select("SELECT * FROM `customer` WHERE `id` = $id ");
        $area = DB::select("SELECT * FROM `area` ");
        $district = DB::select("SELECT * FROM `district` ");
        $customerCategory = DB::select("SELECT * FROM `customerCategory` ");
        $customerType = DB::select("SELECT * FROM `customerType` ");
        return view('customerEdit', compact('customer', 'area', 'district', 'customerCategory', 'customerType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return "update";
        $this -> validate($request, [
            //'email' => 'exists:customer,email',
            'mobileNo' => 'min:10|max:10',
            'telephone' => 'min:10|max:10',
        ]);

        $D = DB::table('customer') -> where('id', $id) -> update([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobileNo' => $request['mobileNo'],
            'telephone' => $request['telephone'],
            'address' => $request['address'],
            'area' => $request['area'],
            'city' => $request['city'],
            'district' => $request['district'],
            'customerCategory' => $request['customerCategory'],
            'customerType' => $request['customerType'],
            'lastBilling' => $request['lastBilling'],
            'balance' => $request['balance'],

            'payTerm' => $request['payTerm'],
            'callPerson' => $request['callPerson'],
            'callDate' => $request['callDate'],
            'callPurpose' => $request['callPurpose'],
            'callResponse' => $request['callResponse'],
            'oldResponse' => $request['oldResponse'],
            'action' => $request['action'],
            'nextPlan' => $request['nextPlan'],
            'timeToCall' => $request['timeToCall'],
            'competitor' => $request['competitor'],
            'amount' => $request['amount'],
        ]);

        $customer = DB::table('customer') -> paginate('2');
        return view('customerDetails', compact('customer')) -> with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM `customer` WHERE `id` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('customer.index')  -> with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect() -> Route('customer.index')  -> with('warning', 'Something went wrong');
        }
    }

    public function invoice(string $id){
        //return $id;
        //return "hello";
        $customer=DB::select("SELECT * FROM `customer` WHERE `id`='$id' ");

        $pdf = Pdf::loadView('invoices.invoice', compact('customer'));
        return $pdf->download('invoice.pdf');
    }
}
