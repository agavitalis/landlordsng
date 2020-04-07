<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PropertyTypeResource;
use App\Models\PropertyType;
use Image;

class PropertyTypesController extends Controller
{
    public function __construct()
    {
      //$this->middleware('auth');
      //$this->middleware('adminGuard');
    }

    public function propertytypes()
    {
           return view('admin.propertytypes');
    }

    public function create(Request $request){
      $this->validate($request,[
        'property_type_name'=>'required|string'
      ]);
      
      //upload the image
      $picture_name = $this->uploadImage($request,'property_type_picture');
      $picture_url = \App::make('url')->to('/')."/storage/uploads/".$picture_name;

      //resize the image
      Image::make("storage/uploads/".$picture_name)->resize(364, 388)->save();

      $type = new PropertyType;
      $type->property_type_name = $request->input('property_type_name');
      $type->property_type_picture = $picture_name;
      $type->property_type_picture_url = $picture_url;
      $type->save();
      return response($type);
    }

    public function getTypes(){
      $types = PropertyType::paginate(3);
      return PropertyTypeResource::collection($types);
    }

    public function updatePropertyType(Request $request){
      $this->validate($request,[
        'id'=>'required',
        'property_type_name'=>'required'
      ]);

      $id = $request->input('id');
      $type = PropertyType::findOrFail($id);
      $type->property_type_name =$request->input('property_type_name');
      $type->save();
      return $type;
    }

    public function destroy($id)
    {
        //find and delete a Room with a particular id
        $type =PropertyType::find($id);
        $type->delete();
        return response()->json(['status'=>'ok'], 200);
    }

    private function uploadImage($request, $file_name)
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
