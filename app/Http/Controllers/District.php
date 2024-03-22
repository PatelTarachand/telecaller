<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class District extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $district = DB::table('district') -> paginate(2);
        return view('districtForm', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $district = DB::table('district') -> insert([
            'name' => $request['name'],
        ]);

        if($district)
        {
            return redirect() -> Route('district.create') -> with('success', 'District Added Successfully'); 
        }
        else
        {
            return redirect() -> Route('district.create') -> with('warning', 'District is not Added'); 
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
        $district = DB::select("SELECT * FROM `district` WHERE `id` = '$id' ");
        return view('editDistrict', compact('district')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = DB::table('district') -> where('id', $id) ->  update( [
            'name' => $request['name'],
        ]);

        if($update)
        {
            return redirect() -> Route('district.create') -> with('success', 'District Updated Successfully');
        }
        else
        {
            return redirect() -> Route('district.create') -> with('warning', 'District is not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM `district`  WHERE `id` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('district.create') -> with('success', 'District Deleted Successfully');
        }
        else
        {
            return redirect() -> Route('district.create') -> with('warning', 'District is not Deleted');
        }
    }
}
