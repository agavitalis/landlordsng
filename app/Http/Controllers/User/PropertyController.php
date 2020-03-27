<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Models\PropertyType;


class PropertyController extends Controller
{
    public function add_property(Request $request)
    {
        if ($request->isMethod('GET')) {

            $property_status = PropertyStatus::get();
            $property_type = PropertyType::all();           
            return view('submit_property', compact('property_status','property_type'));

        }else if($request->isMethod('POST')){
            return response()->json(['status'=>'ok']);
        }
       
    }

    public function my_properties()
    {
        return view('my_properties');
    }
}
