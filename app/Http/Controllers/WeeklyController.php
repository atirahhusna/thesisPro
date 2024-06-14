<?php

namespace App\Http\Controllers;
use App\Models\register_profiles;
use App\Models\crmp;
use App\Models\WeeklyFocus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get the r_profile_id from the session
        $plat_id = Session::get('platinum');
        
        // Retrieve keywords from the request
        $keywords = $request->keywords;
        $data1 = collect();
        $data2 = collect();
        $data3 = collect();
        $data4 = collect();
        $data = collect();

        if (strlen($keywords)) {
            // Filter data based on keywords and r_profile_id
            $data = WeeklyFocus::where('r_profile_id', $plat_id)
                ->where(function($query) use ($keywords) {
                    $query->where('WF_Description', 'like', "%$keywords%")
                          ->orWhere('WF_Type', 'like', "%$keywords%")
                          ->orWhere('WF_SDate', 'like', "%$keywords%")
                          ->orWhere('WF_EDate', 'like', "%$keywords%");
                })
                ->get();
        } else {
            // Fetch weekly focus data for a specific r_profile_id
            $data1 = WeeklyFocus::where('r_profile_id', $plat_id)->where('WF_Type', 'focus')->get();
            $data2 = WeeklyFocus::where('r_profile_id', $plat_id)->where('WF_Type', 'admin')->get();
            $data3 = WeeklyFocus::where('r_profile_id', $plat_id)->where('WF_Type', 'social')->get();
            $data4 = WeeklyFocus::where('r_profile_id', $plat_id)->where('WF_Type', 'recovery')->get();
            $data = WeeklyFocus::where('r_profile_id', $plat_id)->get();
        }

        return view('ProgressMonitoring.WeeklyFocus', compact('data1', 'data2', 'data3', 'data4', 'data'));
    }
    public function view($platinum_id)
    {
        // Retrieve r_profile_id from the session
        $r_profile_id = Session::get('platinum');

        // Fetch weekly focus data for a specific platinum student and r_profile_id
        $data1 = WeeklyFocus::where('platinum_id', $platinum_id)
                            ->where('r_profile_id', $r_profile_id)
                            ->where('WF_Type', 'focus')
                            ->get();
        $data2 = WeeklyFocus::where('platinum_id', $platinum_id)
                            ->where('r_profile_id', $r_profile_id)
                            ->where('WF_Type', 'admin')
                            ->get();
        $data3 = WeeklyFocus::where('platinum_id', $platinum_id)
                            ->where('r_profile_id', $r_profile_id)
                            ->where('WF_Type', 'social')
                            ->get();
        $data4 = WeeklyFocus::where('platinum_id', $platinum_id)
                            ->where('r_profile_id', $r_profile_id)
                            ->where('WF_Type', 'recovery')
                            ->get();
        $data = WeeklyFocus::where('platinum_id', $platinum_id)
                           ->where('r_profile_id', $r_profile_id)
                           ->get();

        return view('WeeklyFocus.view', compact('data1', 'data2', 'data3', 'data4', 'data'));
    }

    public function viewerMentor()
    {
        return view('ProgressMonitoring.WeeklyViewerMentor');
    }

    public function viewerCRMP()
    {
        return view('ProgressMonitoring.WeeklyViewerCRMP');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function addBlock()
    {
        return view('ProgressMonitoring.WeeklyAdd');
    }

    public function viewer(){
        return view('ProgressMonitoring.WeeklyViewer');
    }

    /**
     * Display the weeklyAddItem.
     */

    public function addItem(){
        return view('ProgressMonitoring.WeeklyAddItem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the input data
        $request->validate([
            'WF_Description.f' => 'required|string|max:255',
            'WF_SDate.f' => 'required|date',
            'WF_EDate.f' => 'required|date|after:WF_SDate.f',
            'WF_Description.admin' => 'required|string|max:255',
            'WF_SDate.admin' => 'required|date',
            'WF_EDate.admin' => 'required|date|after:WF_SDate.admin',
            'WF_Description.social' => 'required|string|max:255',
            'WF_SDate.social' => 'required|date',
            'WF_EDate.social' => 'required|date|after:WF_SDate.social',
            'WF_Description.recovery' => 'required|string|max:255',
            'WF_SDate.recovery' => 'required|date',
            'WF_EDate.recovery' => 'required|date|after:WF_SDate.recovery',
        ],[
            'WF_Description.f.required' => 'Focus description is required',
            'WF_SDate.f.required' => 'Focus start date is required',
            'WF_EDate.f.required' => 'Focus end date is required',
            'WF_Description.admin.required' => 'Admin description is required',
            'WF_SDate.admin.required' => 'Admin start date is required',
            'WF_EDate.admin.required' => 'Admin end date is required',
            'WF_Description.social.required' => 'Social description is required',
            'WF_SDate.social.required' => 'Social start date is required',
            'WF_EDate.social.required' => 'Social end date is required',
            'WF_Description.recovery.required' => 'Recovery description is required',
            'WF_SDate.recovery.required' => 'Recovery start date is required',
            'WF_EDate.recovery.required' => 'Recovery end date is required',
        ]);

        // Store the data in the database
        $data1 = WeeklyFocus::create([
            'WF_Description' => $request->WF_Description['f'],
            'WF_Type' => 'focus',
            'WF_SDate' => $request->WF_SDate['f'],
            'WF_EDate' => $request->WF_EDate['f'],
        ]);
        
        $data2 = WeeklyFocus::create([
            'WF_Description' => $request->WF_Description['admin'],
            'WF_Type' => 'admin',
            'WF_SDate' => $request->WF_SDate['admin'],
            'WF_EDate' => $request->WF_EDate['admin'],
        ]);
        
        $data3 = WeeklyFocus::create([
            'WF_Description' => $request->WF_Description['social'],
            'WF_Type' => 'social',
            'WF_SDate' => $request->WF_SDate['social'],
            'WF_EDate' => $request->WF_EDate['social'],
        ]);
        
        $data4 = WeeklyFocus::create([
            'WF_Description' => $request->WF_Description['recovery'],
            'WF_Type' => 'recovery',
            'WF_SDate' => $request->WF_SDate['recovery'],
            'WF_EDate' => $request->WF_EDate['recovery'],
        ]);
        
        // Redirect to the WeeklyFocus page
        return redirect()->to('WeeklyFocus')->with('success', 'Data saved successfully');
    }

    public function storeItem(Request $request){
                    // Validate the input data
                    $request->validate([
                        'type' => 'required|string',
                        'description' => 'required|string',
                        'start_date' => 'required|date',
                        'end_date' => 'required|date|after:start_date',
                    ],[
                        'type.required' => 'Type is required',
                        'description.required' => 'Description is required',
                        'start_date.required' => 'Start date is required',
                        'end_date.required' => 'End date is required',
                        'end_date.after' => 'End date must be after the start date',
                    ]);
            
                    // Store the data in the database
                    $data = WeeklyFocus::create([
                        'WF_Type' => $request->type,
                        'WF_Description' => $request->description,
                        'WF_SDate' => $request->start_date,
                        'WF_EDate' => $request->end_date,
                    ]);

                     // Redirect to the WeeklyFocus page
        return redirect()->to('WeeklyFocus')->with('success', 'Item added successfully');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = WeeklyFocus::where('WF_Description',$id)->first();
        return view('ProgressMonitoring.WeeklyEdit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ],[
            'description.required' => 'Description is required',
            'start_date.required' => 'Start date is required',
            'end_date.required' => 'End date is required',
            'end_date.after' => 'End date must be after the start date',
        ]);
    
    // Find the existing WeeklyFocus record by its ID
    $data = WeeklyFocus::findOrFail($id);

    // Update the record's attributes
    $data->WF_Type = $request->input('type');
    $data->WF_Description = $request->input('description');
    $data->WF_SDate = $request->input('start_date');
    $data->WF_EDate = $request->input('end_date');

    // Save the updated record
    $data->save();
    
        // Redirect to the WeeklyFocus page
        WeeklyFocus::where('WF_Description', $id)->update($data);
        return redirect()->to('WeeklyFocus/' . $id . '/viewP')->with('success', 'Task updated successfully');
    }
    

    public function viewP($id)
    {
                
        $data = WeeklyFocus::where('WF_Description',$id)->first();
        return view('ProgressMonitoring.WeeklyViewP')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                
        WeeklyFocus::where('WF_Description', $id)->delete();
        return redirect()->to('WeeklyFocus')->with('success', 'Item deleted successfully');
        // Redirect to the WeeklyFocus page
    }
}
