<?php

namespace App\Http\Controllers;

use App\Models\DraftThesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DraftThesis::orderBy('DT_Title', 'desc')->paginate(10);
        return view('ProgressMonitoring.DraftThesis')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createThesis()
    {
        return view('ProgressMonitoring.DraftNewTitle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('DT_Title', $request -> DT_Title);
        
        $request ->validate([
            'DT_Title' => 'required|unique:draft_theses,DT_Title',
    ],[
        'DT_Title.required' => 'Title is required',
        'DT_Title.unique' => 'Title already exists',
    ]);
        $data=[
            'DT_Title'=> $request -> DT_Title
        ];
        DraftThesis::create($data);
        return redirect()->to('DraftThesis')->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showDratfList(Request $request)
    {
        $data=[
            'DT_DraftNum'=> $request -> DT_DraftNum,
            'DT_PagesNum'=> $request -> DT_PagesNum,
            'DT_Comment'=> $request -> DT_Comment,
            'DT_DDC'=> $request -> DT_DDC,
            'DT_Completion'=> $request -> DT_Completion,
        ];

        return view('ProgressMonitoring.DraftWork');
    }

        /**
     * Show the viewer interface.
     */
    public function DraftViewer()
    {
        return view('ProgressMonitoring.DraftViewer');
    }

    public function DraftWorkViewer()
    {
        return view('ProgressMonitoring.DraftWorkViewer');
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
