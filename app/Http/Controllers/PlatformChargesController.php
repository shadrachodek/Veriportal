<?php

namespace App\Http\Controllers;

use App\Model\PlatformCharges;
use Illuminate\Http\Request;

class PlatformChargesController extends Controller
{


    public function index(){

        $charges = PlatformCharges::all()->load('document');
        $total = PlatformCharges::all()->sum('charges');
        return view('back.report.platform-charges', compact('charges', 'total'));
    }
}
