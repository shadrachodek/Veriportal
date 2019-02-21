<?php

namespace App\Http\Controllers;

use App\Model\Cofo;
use App\Model\CofoType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CofoTypeController extends Controller
{
    public function index()
    {
        $types = CofoType::all();
        return view('back.setting.payment.index', compact('types'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string',
            'fee' => 'required|integer',

        ],
            [
                'category.required' => 'Category is require!',
                'name.required' => 'Name is require!',
                'fee.required' => 'Fee is require!',
                'fee.digits_between' => 'Fee value is invalid',

            ]);

        $category = Str::title($request->category);
        $name = Str::title($request->name);


        $type = CofoType::updateOrCreate(['category' => $category, 'name' => $name],
            [
            'fee' => $request->fee,
        ]);

        alertify()->success($type->name. " category type Added!");
        return redirect()->route('setting.cofo.type.index');
    }

    public function destroy(CofoType $type){
        $type->delete();
        alertify()->success(Str::title( $type->name ) . " cofo type Deleted!");
        return redirect()->back();

    }

    // api for selection field on Cofo document registration
    public function cofoType($category){
        if ($category == 'Recertification') {
            $category = "New";
        }
        $result = CofoType::where('category', $category)->get();
        return $result;
    }
}
