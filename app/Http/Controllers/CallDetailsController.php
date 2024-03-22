<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(string $id)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = DB::table('callDetails') -> insert([
            'custId' => $request['custId'],
            'history' => $request['history'],
            'remark' => $request['remark'],
        ]);

        if($insert)
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId'] ]) -> with('success', 'Call Details Added Successfully');
        }
        else
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId']]) -> with('warning', 'Call Details is not Added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $callDetails = DB::select("SELECT * FROM `callDetails` WHERE `callid` = '$id' ");
        return view('editCallDetails', compact('callDetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = DB::table('callDetails') -> where('callId', $id) -> update([
            'history' => $request['history'],
            'remark' => $request['remark'],
        ]);

        if($update)
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId'] ]) -> with('success', 'Call Details updated Successfully');
        }
        else
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId']]) -> with('warning', 'Call Details is not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $delete = DB::delete("DELETE FROM `callDetails` WHERE `callId` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId'] ]) -> with('success', 'Call Details deleted Successfully');
        }
        else
        {
            return redirect() -> Route('customerId.id', ['id' => $request['custId']]) -> with('warning', 'Call Details is not deleted');
        }
    }
}
