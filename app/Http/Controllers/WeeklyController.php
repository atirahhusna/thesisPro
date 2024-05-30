<?php

namespace App\Http\Controllers;

use App\Models\WeeklyFocus;
use Illuminate\Http\Request;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ProgressMonitoring.WeeklyFocus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ProgressMonitoring.WeeklyAdd');
    }

    public function viewer()
    {
        return view('ProgressMonitoring.WeeklyViewer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = [
            'description' =>$request->description,
            'category' =>$request->category,
            'date' =>$request->date,
       ];
       WeeklyFocus::create($data);
       return 'HI';
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
