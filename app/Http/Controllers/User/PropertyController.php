<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Exceptions;
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

            DB::beginTransaction();
            try {
                
                $project = Project::find($id);
                $project->users()->detach();
                $project->delete();



                DB::commit();
                return response()->json(['status'=>'ok']);
            } catch (Exception $ex) {
                DB::rollback();
                return response()->json(['error' => $ex->getMessage()], 500);
            }

           
        }
       
    }

    public function my_properties()
    {
        return view('my_properties');
    }
}
