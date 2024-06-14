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
    public function ReportViewer(Request $request)
    {

        $institutionKeywords = $request->institutionKeywords;
        $yearKeywords = $request->yearKeywords;
        $keywords = $request->keywords;
    
        $query = publication::query();
    
        if (strlen($institutionKeywords) && strlen($yearKeywords) && strlen($keywords)) {
            // If both institution and year keywords are provided
            $query->where('publication_institution', 'like', "%$institutionKeywords%")
                  ->whereYear('publication_date', $yearKeywords)
                  ->where('publication_title', 'like', "%$keywords%");
        } else {
            // If only institution keyword is provided
            if (strlen($institutionKeywords)) {
                $query->where('publication_institution', 'like', "%$institutionKeywords%");
            }
    
            // If only year keyword is provided
            if (strlen($yearKeywords)) {
                $query->whereYear('publication_date', $yearKeywords);
            }

            // Adding title keywords conditionally
            if (strlen($keywords)) {
                $query->where('publication_title', 'like', "%$keywords%");
            }
        }

    
        $data = $query->orderBy('publication_ID', 'desc')->get();
    
        return view('PublicationData.ReportViewer')->with('data', $data);
    }

    public function generatePublicationPdf(Request $request)
    {

        $institutionKeywords = $request->institutionKeywords;
        $yearKeywords = $request->yearKeywords;
        $keywords = $request->keywords;
    
        $query = publication::query();
    
        if (strlen($institutionKeywords) && strlen($yearKeywords) && strlen($keywords)) {
            // If both institution and year keywords are provided
            $query->where('publication_institution', 'like', "%$institutionKeywords%")
                  ->whereYear('publication_date', $yearKeywords)
                  ->where('publication_title', 'like', "%$keywords%");
        } else {
            // If only institution keyword is provided
            if (strlen($institutionKeywords)) {
                $query->where('publication_institution', 'like', "%$institutionKeywords%");
            }
    
            // If only year keyword is provided
            if (strlen($yearKeywords)) {
                $query->whereYear('publication_date', $yearKeywords);
            }

            // Adding title keywords conditionally
            if (strlen($keywords)) {
                $query->where('publication_title', 'like', "%$keywords%");
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

        $institutionKeywords = $request->institutionKeywords;
        $yearKeywords = $request->yearKeywords;
        $keywords = $request->keywords;
    
        $query = publication::query();
    
        if (strlen($institutionKeywords) && strlen($yearKeywords) && strlen($keywords)) {
            // If both institution and year keywords are provided
            $query->where('publication_institution', 'like', "%$institutionKeywords%")
                  ->whereYear('publication_date', $yearKeywords)
                  ->where('publication_title', 'like', "%$keywords%");
        } else {
            // If only institution keyword is provided
            if (strlen($institutionKeywords)) {
                $query->where('publication_institution', 'like', "%$institutionKeywords%");
            }
    
            // If only year keyword is provided
            if (strlen($yearKeywords)) {
                $query->whereYear('publication_date', $yearKeywords);
            }

            // Adding title keywords conditionally
            if (strlen($keywords)) {
                $query->where('publication_title', 'like', "%$keywords%");
            }
        }

    
        $data = $query->orderBy('publication_ID', 'desc')->get();
    
        return view('PublicationData.PublicationViewer')->with('data', $data);
    }

    public function PublicationManager()
    {
        $r_profile_id = session('platinum')['r_profile_id'];

        \Log::info('Session r_profile_id: ' . $r_profile_id);

        $data = Publication::where('r_profile_id', $r_profile_id)
            ->orderBy('publication_ID', 'desc')
            ->get();

        \Log::info('Publications data: ' . $data->toJson());

        return view('PublicationData.MyPublicationManager', compact('data'));
    }



    public function index()
    {
        $data = publication::orderBy('publication_ID', 'desc')->get();
        return view('PublicationData.MyPublicationManager')->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        return view('PublicationData.test');
    }*/

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
            'r_profile_id' => $request-> user_id,      
            
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
