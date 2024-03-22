<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $custType = DB::table('customerType') -> paginate(2);
        return view('custTypeForm', compact('custType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = DB::table('customerType') -> insert([
            'name' => $request['name'],
        ]);

        if($insert)
        {
            return redirect() -> Route('custType.create') -> with('success', 'Customer Type Added Successfully');
        }
        else
        {
            return redirect() -> Route('custType.create') -> with('warning', 'Customer type is not added');
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
        $custType = DB::table('customerType')->where('id',$id)-> get();
        return view('editCustType', compact('custType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = DB::table('customerType') -> where('id', $id) -> update([
            'name' => $request['name'],
        ]);

        if($update)
        {
            return redirect() -> Route('custType.create') -> with('success', 'Customer Type updated Successfully');
        }
        else
        {
            return redirect() -> Route('custType.create') -> with('warning', 'Customer Type is not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM `customerType` WHERE `id` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('custType.create') -> with('success', 'Customer Type deleted Successfully');
        }
        else
        {
            return redirect() -> Route('custType.create') -> with('warning', 'Customer Type is not deleted');
        }
    }
}
