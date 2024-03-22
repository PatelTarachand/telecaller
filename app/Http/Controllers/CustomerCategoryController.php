<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerCategoryController extends Controller
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
        $custCate = DB::table('customerCategory') -> paginate(2);
        return view('custCateForm', compact('custCate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = DB::table('customerCategory') -> insert([
            'name' => $request['name'],
        ]);

        if($store)
        {
            return redirect() -> Route('custCate.create') -> with('success', 'Customer Category added successfully');
        }
        else
        {
            return redirect() -> Route('custCate.create') -> with('warning', 'Customer Category is not  added');
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
        $custCate = DB::select("SELECT * FROM `customerCategory` WHERE `id` = '$id' ");
        return view('editCustCate', compact('custCate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = DB::table('customerCategory') -> where('id', $id) -> update([
            'name' => $request['name'],
        ]);

        if($update)
        {
            return redirect() -> Route('custCate.create') -> with('success', 'Customer Category updated successfully');
        }
        else
        {
            return redirect() -> Route('custCate.create') -> with('warning', 'Customer Category is not  updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM `customercategory` WHERE `id` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('custCate.create') -> with('success', 'Customer Category deleted successfully');
        }
        else
        {
            return redirect() -> Route('custCate.create') -> with('warning', 'Customer Category is not  deleted');
        }
    }
}
