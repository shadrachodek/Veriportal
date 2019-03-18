<?php

namespace App\Http\Controllers;

use App\Model\CofoType;
use App\Model\PaymentType;
use App\Model\PlatformCharges;
use Illuminate\Http\Request;

class PlatformChargesController extends Controller
{


    public function index(Request $request){


        $charge = (new PlatformCharges)->newQuery();

        if (($request->has('from-date') && $request->filled('from-date')) && ($request->has('to-date') && $request->filled('to-date'))){
            $charge->whereBetween('created_at', [$request->input('from-date'), $request->input('to-date')]);
        }

        if ($request->has('payment_type') && $request->filled('payment_type')){
            $charge->where('payment_type', $request->input('payment_type'));
        }

        if ($request->has('purpose_of_use') && $request->filled('purpose_of_use')){
            $charge->where('purpose_of_use', $request->input('purpose_of_use'));
        }

        $charges = $charge->with('document')->paginate(10);
        $total = PlatformCharges::all()->sum('charges');
        $paymentTypes = PaymentType::pluck('type');
        $cofoTypes = CofoType::pluck('name');
        return view('back.report.platform-charges', compact('charges', 'total', 'paymentTypes', 'cofoTypes'));
    }
}
