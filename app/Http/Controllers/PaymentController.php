<?php

namespace App\Http\Controllers;

use App\Model\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index(){

        $payments = Payment::with('document', 'platformCharges')->get();
        $total = Payment::all()->sum('amount');
        return view('back.report.payment-collection', compact('payments', 'total'));
    }
}
