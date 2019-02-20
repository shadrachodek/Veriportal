<?php

namespace App\Http\Controllers;

use App\Model\Cofo;
use App\Model\Document;
use App\Model\DocumentSurveyPlan;
use Keygen\Keygen;
use App\Model\FileStorage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CofoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $owner)
    {
        $request->validate([
            'house_plot_number' => 'required|string|max:255',
            'street_name' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'dimension' => 'required|string|max:255',
            'survey_plan_number' => 'required|string|max:255',
            'purpose_of_use' => 'required|string|max:255',
            'commencement_year' => 'required|string|max:255',
            'building_value' => 'required|string|max:255',
            'yearly_rent_payable' => 'required|numeric',
            'term' => 'required|string|max:255',
            'file_number' => 'required|string|max:255',
            'revision_period' => 'required|string|max:255',
            'attach_doc' => 'required',
            'attach_doc.*' => 'image|mimes:jpeg,png,jpg|max:2048'

        ],
            [
                'house_plot_number.required' => 'First Name is require!',
                'yearly_rent_payable.required' => 'Last Name is require!',
                'attach_doc.required' => 'Attach Document is require!',
                'attach_doc.mimes' => 'Attach Document should be JPG/JPEG',
                'attach_doc.max' => 'Attach Document should not be more than 2m'

            ]);

        $cofo = Cofo::create([
            'house_plot_number' => $request->house_plot_number,
            'street_name' => $request->street_name,
            'area' => $request->area,
            'city' => $request->city,
            'file_number' => $request->file_number,
            'dimension' => $request->dimension,
            'survey_plan_number' => $request->survey_plan_number,
            'purpose_of_use' => $request->purpose_of_use,
            'commencement_year' => $request->commencement_year,
            'development_period' => $request->development_period,
            'building_value' => $request->building_value,
            'yearly_rent_payable' => $request->yearly_rent_payable,
            'term' => $request->term,
            'revision_period' => $request->revision_period,
        ]);

        $doc = new Document();
        $doc->document_id = Keygen::numeric(12)->generate();
        $doc->owner_id = $owner;

        $cofo->documents()->save($doc);
        $document_id = $doc->document_id;


        // attach document
        if($request->hasfile('attach_doc'))
        {
            $photos = $request->file('attach_doc');
            $paths  = [];

            foreach ($photos as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $filename  = $owner . "-". time() . '.' . $extension;
                $paths[]   = $photo->storeAs('public/document', $filename);

                // save to database
                $fileImage = new FileStorage();
                $fileImage->filename = $filename;
                $fileImage->ownby = $document_id;
                $fileImage->type = "Document";
                $fileImage->save();
            }

        }

        return redirect()->route('doc.survey_plan', compact('document_id'));

    }

    /**r
     * Display the specified resource.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function SurveyPlan(Document $document)
    {
        $id = $document->document_id;
        return view('back.document.survey-plan', compact('id'));
    }

    public function SurveyPlanUpload(Request $request, Document $document)
    {
        if($request->hasfile('survey_plan'))
        {
            $document_id = $document->document_id;
            $survey_plan = $request->file('survey_plan');
            $extension = $survey_plan->getClientOriginalExtension();
            $filename  = $document_id  . "-". time() . '-survey-plan.' . $extension;
            $survey_plan->storeAs('public/survey-plan/', $filename);

            // save to database
            $fileImage = new DocumentSurveyPlan();
            $fileImage->file = $filename;
            $fileImage->document_id = $document_id;
            $fileImage->save();

            if($document->payment){
                alertify()->success('Updated survey plan file successfully');
                return redirect()->route('document.show', compact('document_id'));
            }
            return redirect()->route('doc.payments', compact('document_id'));

        }
        return redirect()->back()->with('errors',  "Error");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cofo $cofo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cofo $cofo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cofo  $cofo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cofo $cofo)
    {
        //
    }
}
