<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ExpertDomain;

class ExpertController extends Controller
{
    public function index(){
       $data = ExpertDomain::get();
       //return $data;
       return view('ExpertDomain/ViewExpert', compact('data'));
    }

    public function AddExpert()
    {
        return view('ExpertDomain/AddExpert');
    }

    public function SaveExpert(Request $request)
    {
        $request->validate([
            'e_Name' => 'required',
            'e_University' => 'required',
            'e_Expertise' => 'required',
            'e_Email' => 'required|email',
            'e_PhoneNum' => 'required|numeric|min:12',
            'e_TitleResearch' => 'required',
            'e_Paper' => 'required',

        ]);

        $e_Name = $request->e_Name;
        $e_University = $request->e_University;
        $e_Expertise = $request->e_Expertise;
        $e_Email = $request->e_Email;
        $e_PhoneNum = $request->e_PhoneNum;
        $e_TitleResearch = $request->e_TitleResearch;
        $e_Paper = $request->e_Paper;

        $expert = new ExpertDomain();
        $expert->e_name = $e_Name;
        $expert->e_University = $e_University;
        $expert->e_Expertise = $e_Expertise;
        $expert->e_Email = $e_Email;
        $expert->e_PhoneNum = $e_PhoneNum;
        $expert->e_TitleResearch = $e_TitleResearch;
        $expert->e_Paper = $e_Paper;
        $expert->save();

        return redirect()->back()->with('success', 'Expert Added');
    }

    public function EditExpert($e_ID)
    {
        $data = ExpertDomain::where('e_ID','=', $e_ID)->first();
        return view('ExpertDomain/EditExpert', compact('data'));
    }

    public function UpdateExpert(Request $request)
    {
        $request->validate([
            'e_Name' => 'required',
            'e_University' => 'required',
            'e_Expertise' => 'required',
            'e_Email' => 'required|email',
            'e_PhoneNum' => 'required|numeric|min:12',
            'e_TitleResearch' => 'required',
            'e_Paper' => 'required',

        ]);

        $e_ID = $request->e_ID;
        $e_Name = $request->e_Name;
        $e_University = $request->e_University;
        $e_Expertise = $request->e_Expertise;
        $e_Email = $request->e_Email;
        $e_PhoneNum = $request->e_PhoneNum;
        $e_TitleResearch = $request->e_TitleResearch;
        $e_Paper = $request->e_Paper;

        ExpertDomain::where('e_ID', '=', $e_ID)->update([
            'e_Name'=>$e_Name,
            'e_University'=>$e_University,
            'e_Expertise'=>$e_Expertise,
            'e_Email'=>$e_Email,
            'e_PhoneNum'=>$e_PhoneNum,
            'e_TitleResearch'=>$e_TitleResearch,
            'e_Paper'=>$e_Paper,
        ]);   

        return redirect()->back()->with('success', 'Expert Updated Successfully');

    }

    public function DeleteExpert($e_ID)
    {
        ExpertDomain::where('e_ID', '=', $e_ID)->delete();
        return redirect()->back()->with('success', 'Expert Deleted Successfully');

    }

    public function ExpertDetail($e_ID)
    {
        $data = ExpertDomain::find($e_ID);
        return view('ExpertDomain/ExpertDetail', compact('data'));
    }

    public function SearchExpert(Request $request)
    {
    $query = $request->input('query');

    $experts = ExpertDomain::where('e_Name', 'like', "%$query%")
        ->orWhere('e_University', 'like', "%$query%")
        ->orWhere('e_Expertise', 'like', "%$query%")
        ->orWhere('e_TitleResearch', 'like', "%$query%")
        ->get();

    return view('ExpertDomain/SearchExpert', compact('experts', 'query'));
    }

    public function List(){
        $data = ExpertDomain::get();
        //return $data;
        return view('ExpertDomain/List', compact('data'));
     }

     public function View($e_ID)
    {
        $data = ExpertDomain::find($e_ID);
        return view('ExpertDomain/View', compact('data'));
    }

    public function Search(Request $request)
    {
    $query = $request->input('query');

    $experts = ExpertDomain::where('e_Name', 'like', "%$query%")
        ->orWhere('e_University', 'like', "%$query%")
        ->orWhere('e_Expertise', 'like', "%$query%")
        ->orWhere('e_TitleResearch', 'like', "%$query%")
        ->get();

    return view('ExpertDomain/Search', compact('experts', 'query'));
    }

}