<?php

namespace App\Http\Controllers;

use App\Model\CofoType;
use App\Model\Document;
use App\Model\Payment;
use App\Model\PaymentType;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index(Request $request){
       // return $request->all();

    //    $filled = 'Paid';

       // $document = Document::where('documentable_type', '=',  'Certificate of Occupancy')->whereHas('payment', function ($query) use ($filled) {
      //      $query->where('status', '=', $filled);
      //  })->paginate(10);

      //  return $document;
      //  dd('die');

        $payment = (new Payment)->newQuery();

        if (($request->has('from-date') && $request->filled('from-date')) && ($request->has('to-date') && $request->filled('to-date'))){
            $payment->whereBetween('created_at', [$request->input('from-date'), $request->input('to-date')]);
        }

        if ($request->has('payment_type') && $request->filled('payment_type')){
            $payment->where('payment_type', $request->input('payment_type'));
        }

        if ($request->has('purpose_of_use') && $request->filled('purpose_of_use')){
            $payment->where('purpose_of_use', $request->input('purpose_of_use'));
        }

        $payments = $payment->with('document')->paginate(10);
        $paymentTypes = PaymentType::pluck('type');
        $cofoTypes = CofoType::pluck('name');
        $total = Payment::all()->sum('amount');
        return view('back.report.payment-collection', compact('payments', 'total', 'paymentTypes', 'cofoTypes'));
    }
}
