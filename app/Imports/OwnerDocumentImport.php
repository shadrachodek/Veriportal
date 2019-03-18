<?php

namespace App\Imports;

use App\Model\CofoType;
use App\Model\DocumentSurveyPlan;
use App\Model\Owner;
use App\Model\Document;
use App\Model\Cofo;
use App\Model\OwnerPassport;
use App\Model\Payment;
use App\Model\PlatformCharges;
use Keygen\Keygen;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class OwnerDocumentImport implements ToModel
{
    public function model(array $row)
    {

//            new Owner([
//            'full_name'     => $row[1],
//            'owner_id'    => Keygen::numeric(10)->generate(),
//        ]);


        $cofo = Cofo::create([
            'category' => "New",
            'house_plot_number' => $row[4],
            'street_name' => null,
            'area' => $row[3],
            'city' => null,
            'file_number' => $row[2],
            'dimension' => (@$row[11] ? $row[11] : null),
            'survey_plan_number' => $row[8],
            'purpose_of_use' => Str::title($row[6]),
            'commencement_year' => null,
            'development_period' => $row[10],
            'building_value' => $row[9],
            'yearly_rent_payable' => $row[5],
            'term' => $row[7],
            'revision_period' => null,
        ]);

        $owner = Owner::firstOrNew(
            ['full_name' => $row[1]],
            ['owner_id' => Keygen::numeric(10)->generate()]
        );
        $owner->save();

        $doc = new Document();
        $doc->document_id = Keygen::numeric(12)->generate();
        $doc->owner_id = $owner->owner_id;

        $cofo->documents()->save($doc);

        $surveyPlan = new DocumentSurveyPlan();
        $surveyPlan->document_id = $doc->document_id;
        $surveyPlan->file = str_replace(" ","_",$cofo->file_number) . ".jpg";
        $surveyPlan->save();

        $category = $cofo->category;
        $name = $cofo->purpose_of_use;
        $fee = CofoType::getFee($category, $name)->first();

        $payment = new Payment();
        $payment->amount = $fee ? $fee->fee : 0;
        $payment->payment_type = "Cash";
        $payment->document_id = $doc->document_id;
        $payment->status = "Paid";
        $payment->name = $owner->full_name;
        $payment->purpose_of_use = $cofo->purpose_of_use;
        $payment->save();

        if(!is_null($payment)){
            $charges = new PlatformCharges();
            $charges->document_id = $doc->document_id;
            $charges->charges = $payment->amount * (20/100);
            $charges->amount = $payment->amount;
            $charges->payment_type = $payment->payment_type;
            $charges->purpose_of_use = $cofo->purpose_of_use;
            $charges->save();
        }

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