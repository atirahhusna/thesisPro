<?php

namespace App\Http\Controllers;

use App\Models\publication;
use Illuminate\Http\Request;



class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ReportViewer()
    {
        return view('PublicationData.ReportViewer');
    }

    public function PublicationViewer()
    {
        // Fetch data here if needed
        $data = publication::orderBy('publication_ID', 'desc')->get();
        return view('PublicationData.PublicationViewer')->with('data', $data);
    }

    public function PublicationManager()
    {
        // Fetch data here if needed
        $data = publication::orderBy('publication_ID', 'desc')->get();
        return view('PublicationData.MyPublicationManager')->with('data', $data);
    }

    public function index()
    {
        $data = publication::orderBy('publication_ID', 'desc')->get();
        return view('PublicationData.MyPublicationManager')->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PublicationData.test');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'publicationid' => 'required|max:10|unique:publication,publication_ID',
        ], [
            'publicationid.required' => 'Please enter different publication ID',
            
        ]);
        $data = [
            'publication_ID' => $request->publicationid,
            'publication_title' => $request->title,
            'publication_DOI' => $request->DOI,
            'publication_abstract' => $request->abstract,
            'publication_year' => $request->year,
            'publication_authors' => $request->authors,
            'publication_institution' => $request->institution,
            'publication_types' => $request->types,        
            
        ];
        
        publication::create($data);

        return redirect()->route('publication.publicationManager')->with('success', 'Publication created successfully.');
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
        $data = publication::where('publication_ID', $id)->first();
        return view('PublicationData.editMyPublication')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        ], [
            
            
        ]);
        $data = [
            'publication_title' => $request->title,
            'publication_DOI' => $request->DOI,
            'publication_abstract' => $request->abstract,
            'publication_year' => $request->year,
            'publication_authors' => $request->authors,
            'publication_institution' => $request->institution,
            'publication_types' => $request->types,        
            
        ];
        
        publication::where('publication_ID',$id)->update($data);

        return redirect()->route('publication.publicationManager')->with('success', 'Publication created successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        publication::where('publication_ID',$id)->delete();
        return redirect()->route('publication.publicationManager')->with('success', 'Publication created successfully.');
    }
}
