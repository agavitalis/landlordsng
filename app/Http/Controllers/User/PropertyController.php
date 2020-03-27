<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\Property;
use Exceptions;
use Auth;
use DB;


class PropertyController extends Controller
{
    public function add_property(Request $request)
    {
        if ($request->isMethod('GET')) {

            $property_status = PropertyStatus::get();
            $property_type = PropertyType::all();           
            return view('submit_property', compact('property_status','property_type'));

        }else if($request->isMethod('POST')){
           // return response()->json(array('message' => "Success"));
            DB::beginTransaction();
            try {

                //create the property
                
                $property = Property::create(['title' => $request->title, 'location' => $request->location,
                'country' => $request->country, 'state' => $request->state, 'property_status_id' =>  $request->status,
                'property_type_id' => $request->type, 'price' => $request->price,'property_description' => $request->description,
                'agent_id' => Auth::user()->agent->id,'property_video' => $request->video]);
               
                //create the attributes


                //upload the images
                DB::commit();
                return response()->json(array('message' => "Success"));
            } catch (Exception $ex) {
                DB::rollback();
                return response()->json(array('message' => $ex->getMessage()));
            }

           
        }
       
    }

    public function my_properties()
    {
        return view('my_properties');
    }
}
