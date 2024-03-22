<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Area extends Controller
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
        $area = DB::table('area') -> paginate(2);
        return view('areaForm', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = $request -> name;
        $area = DB::insert("INSERT INTO `area` (name) VALUES ('$insert') ");
        
        if($area)
        {
            return redirect() -> Route('area.create') -> with('success', 'Area added successfully');
        }
        else
        {
            return redirect() -> Route('area.create') -> with('warning', 'Area not added successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd($request -> all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $area = DB::select("SELECT * FROM `area` WHERE `id` = '$id' ");
        return view('editArea', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = $request -> name;
        $areaUpdate = DB::update("UPDATE `area` SET `name` = '$edit' WHERE `id` = '$id' ");

        if($areaUpdate)
        {
            return redirect() -> Route('area.create') -> with('success', 'Updated Successfully');
        }
        else
        {
            return redirect() -> Route('area.create') -> with('warning', 'Updated not Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = DB::delete("DELETE FROM `area` WHERE `id` = '$id' ");

        if($delete)
        {
            return redirect() -> Route('area.create') -> with('success', 'deleted Successfully');
        }
        else
        {
            return redirect() -> Route('area.create') -> with('warning', 'deleted not Successfully');
        }
    }
}
