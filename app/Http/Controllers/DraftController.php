<?php

namespace App\Http\Controllers;

use App\Models\DraftThesis;
use App\Models\register_profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $keywords = $request->keywords;
        $totLine = 10;
        if(strlen($keywords)){
            $data = DraftThesis::where('DT_DraftNum', 'like', "%$keywords%")
            ->orWhere('DT_Title', 'like', "%$keywords%")
            ->orWhere('DT_PagesNum', 'like', "%$keywords%")
            ->orWhere('DT_SDate', 'like', "%$keywords%")
            ->paginate($totLine);
        }
        else{
        $data = DraftThesis::orderBy('DT_DraftNum', 'asc')->paginate($totLine);
        foreach ($data as $index => $item) {
            $item->DT_DraftNum = $data->firstItem() + $index;
        }
    }
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
            'DT_SDate' => 'required|date',
            'DT_EDate' => 'required|date',
            'DT_PagesNum' => 'required',
    ],[
        'DT_Title.required' => 'Title is required',
        'DT_Title.unique' => 'Title already exists',
        'DT_SDate.required' => 'Start Date is required',
        'DT_EDate.required' => 'End Date is required',
        'DT_PagesNum.required' => 'Number of Pages is required',
    ]);
        $data=[
            'DT_Title'=> $request -> DT_Title,
            'DT_SDate'=> $request -> DT_SDate,
            'DT_EDate'=> $request -> DT_EDate,
            'DT_PagesNum'=> $request -> DT_PagesNum,
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
    public function DraftViewerCRMP()
    {
        return view('ProgressMonitoring.DraftViewerCRMP');
    }

    public function DraftViewerMentor(Request $request)
    {
        // Fetch the search keyword
        $crmps = crmp::all();
        $profiles = register_profiles::all();
        if ($request->has('katakunci')) {
            $profiles = register_profiles::where('r_profile_id', 'like', '%' . $request->katakunci . '%')
                                       ->orWhere('r_name', 'like', '%' . $request->katakunci . '%')
                                       ->get();}
        return view('ProgressMonitoring.DraftViewerMentor',compact('profiles'));
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
        $data = DraftThesis::where('DT_Title',$id)->first();
        return view('ProgressMonitoring.DraftEdit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request ->validate([
            'DT_Title' => 'required|unique:draft_theses,DT_Title',
            'DT_SDate' => 'required|date',
            'DT_EDate' => 'required|date',
            'DT_PagesNum' => 'required',
    ],[
        'DT_Title.required' => 'Title is required',
        'DT_Title.unique' => 'Title already exists',
        'DT_SDate.required' => 'Start Date is required',
        'DT_EDate.required' => 'End Date is required',
        'DT_PagesNum.required' => 'Number of Pages is required',
    ]);
        $data=[
            'DT_Title'=> $request -> DT_Title,
            'DT_SDate'=> $request -> DT_SDate,
            'DT_EDate'=> $request -> DT_EDate,
            'DT_PagesNum'=> $request -> DT_PagesNum,
        ];
        DraftThesis::where('DT_Title',$id)->update($data);
        return redirect()->to('DraftThesis')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DraftThesis::where('DT_Title', $id)->delete();
        return redirect()->to('DraftThesis')->with('success', 'Item deleted successfully');
        // Redirect to the WeeklyFocus page
    }
}
