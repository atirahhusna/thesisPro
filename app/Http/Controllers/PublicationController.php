<?php

namespace App\Http\Controllers;

use App\Models\publication;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ReportViewer()
    {
        return view('PublicationData.ReportViewer');
    }

    public function generatePublicationPdf(Request $request)
    {

        $institutionKeywords = $request->institutionKeywords;
        $yearKeywords = $request->yearKeywords;

        $query = publication::query();

        if (strlen($institutionKeywords) && strlen($yearKeywords)) {
            // If both keywords are provided
            $query->where('publication_institution', 'like', "%$institutionKeywords%")
                  ->whereYear('publication_date', $yearKeywords);
        } else {
            // If only institution keyword is provided
            if (strlen($institutionKeywords)) {
                $query->where('publication_institution', 'like', "%$institutionKeywords%");
            }
    
            // If only year keyword is provided
            if (strlen($yearKeywords)) {
                $query->whereYear('publication_date', $yearKeywords);
            }
        }

        $publications = $query->get();

        $data = [
            'title' => 'Publication Report',
            'date' => date('Y-m-d'),
            'publications' => $publications // Correct the data key
        ];
        $pdf = Pdf::loadView('PublicationData.generate-publication-pdf', $data);
        return $pdf->download('publication-report.pdf');
    }

    public function PublicationViewer(Request $request)
    {
        $keywords = $request->keywords;
        if(strlen($keywords))
        {
            $data = publication::where('publication_title', 'like', "%$keywords%")
                                    ->orWhereYear('publication_date', 'like', "%$keywords%")->get(); // Add ->get() to execute the query
        }
        else{
                    // Fetch data here if needed
            $data = publication::orderBy('publication_ID', 'desc')->get();
        }

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

        $data = [
            'publication_title' => $request->title,
            'publication_DOI' => $request->DOI,
            'publication_abstract' => $request->abstract,
            'publication_date' => $request->date,
            'publication_authors' => $request->authors,
            'publication_institution' => $request->institution,
            'publication_types' => $request->type,        
            
        ];
        
        publication::create($data);

        return redirect()->route('publication.publicationManager')->with('success', 'Publication created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = publication::where('publication_ID', $id)->first();
        return view('PublicationData.viewMyPublication')->with('data', $data);
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
            'publication_date' => $request->date,
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
