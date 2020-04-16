<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PropertyAttribute;
use App\Models\PropertyPicture;
use App\Models\PropertyStatus;
use Illuminate\Http\Request;
use App\Models\PropertyType;
use App\Models\Property;
use Exceptions;
use Auth;
use DB;


class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_property(Request $request)
    {
        if ($request->isMethod('GET')) {

            $property_status = PropertyStatus::get();
            $property_type = PropertyType::all();           
            return view('user.agent.submit_property', compact('property_status','property_type'));

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
                $attr_title_arr = explode(",,",$request->attr_title);
                $attr_value_arr = explode(",,",$request->attr_value);

                if(count($attr_title_arr) > 0 && count($attr_value_arr) > 0){

                    for ($i=0; $i < count($attr_value_arr); $i++) { 

                        $attr_title = str_replace(",","",$attr_title_arr[$i]);
                        $attr_value = str_replace(",","",$attr_value_arr[$i]);
                    
                        if($attr_value != "" && $attr_value != ""){
                            PropertyAttribute::create(['attribute_name' =>  $attr_title, 'attribute_value' =>  $attr_value,'property_id' => $property->id]);
                        }
                       
                    }
                }
                
                //upload the images
                if($request->hasfile('file')){
    
                    foreach($request->file('file') as $image)
                    {
                        $extension = $image->getClientOriginalExtension();
                        $new_name = round(microtime(true)* 234) . '.' .$extension;
                        $image->storeAs(  'public/uploads', $new_name);
                        //get full path  
                        $picture_url = \App::make('url')->to('/')."/storage/uploads/".$new_name;
        
                        $picture = new PropertyPicture();
                        $picture->picture_name = $new_name;
                        $picture->picture_url = $picture_url;
                        $picture->property_id = $property->id;
                        $picture->save();       
                    }
            
                }

                DB::commit();
                return response()->json(array('message' => "Property successfully uploaded"));
            } catch (Exception $ex) {
                DB::rollback();
                return response()->json(array('message' => $ex->getMessage()));
            }

           
        }
       
    }

    public function my_properties()
    {
        if(Auth::user()->agent()->exists()){
            $properties = Property::where(['agent_id'=>Auth::user()->agent->id])->get();
        }else{
            $properties = Array();
        }
        return view('user.agent.my_properties',compact('properties'));
    }

    public function favorite_properties()
    {
        return view('favorite_properties');
    }

    public function uploadImage($request, $file_name)
    {
        //upload discription image and create garden
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;

        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }
}
