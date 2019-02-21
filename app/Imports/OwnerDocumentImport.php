<?php

namespace App\Imports;

use App\Model\DocumentSurveyPlan;
use App\Model\Owner;
use App\Model\Document;
use App\Model\Cofo;
use App\Model\OwnerPassport;
use Illuminate\Support\Collection;
use Keygen\Keygen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;

class OwnerDocumentImport implements ToModel
{
    public function model(array $row)
    {
        $owner = new Owner([
            'full_name'     => $row[1],
            'owner_id'    => Keygen::numeric(10)->generate(),
        ]);

        $owner->save();

        $cofo = Cofo::create([
            'house_plot_number' => $row[4],
            'street_name' => null,
            'area' => $row[3],
            'city' => null,
            'file_number' => $row[2],
            'dimension' => null,
            'survey_plan_number' => $row[8],
            'purpose_of_use' => $row[6],
            'commencement_year' => null,
            'development_period' => $row[10],
            'building_value' => $row[9],
            'yearly_rent_payable' => $row[5],
            'term' => $row[7],
            'revision_period' => null,
        ]);

        $doc = new Document();
        $doc->document_id = Keygen::numeric(12)->generate();
        $doc->owner_id = $owner->owner_id;

        $cofo->documents()->save($doc);

        $surveyPlan = new DocumentSurveyPlan();
        $surveyPlan->document_id = $doc->document_id;
        $surveyPlan->file = str_replace(" ","_",$cofo->file_number) . ".jpg";
        $surveyPlan->save();

        $passport = new OwnerPassport();
        $passport->owner_id = $owner->owner_id;
        $passport->file = str_replace(" ","_",$cofo->file_number) . ".jpg";
        $passport->save();




    }

//    public function model(array $row)
//    {
//       $name = $row;
//      //   return;
//
//        return new Owner([
//            'full_name'     => $row[1],
//            'owner_id'    => Keygen::numeric(10)->generate(),
//        ]);
//
////
////        $cofo = Cofo::create([
////            'house_plot_number' => $row[4],
////            'street_name' => null,
////            'area' => $row[3],
////            'city' => null,
////            'file_number' => $row[2],
////            'dimension' => null,
////            'survey_plan_number' => $row[8],
////            'purpose_of_use' => $row[6],
////            'commencement_year' => null,
////            'development_period' => $row[10],
////            'building_value' => $row[9],
////            'yearly_rent_payable' => $row[5],
////            'term' => $row[7],
////            'revision_period' => null,
////        ]);
////
////        $doc = new Document();
////        $doc->document_id = Keygen::numeric(12)->generate();
////        $doc->owner_id = $owner->owner_id;
////
////        $cofo->documents()->save($doc);
//
//    }
}