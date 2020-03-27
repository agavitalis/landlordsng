<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PropertyTypeResource;
use App\Models\PropertyType;

class PropertyTypesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      //$this->middleware('adminGuard');
    }

    public function propertytypes()
    {
        // $users_count = User::count();
        // $series_count = Series::count();
        // $pro_investors_count = ProInvestor::count();
        // $investors_count = Investor::count();
        //return view('admin. propertytypes', compact('series_count','users_count','pro_investors_count','investors_count'));
        return view('admin.propertytypes');
    }

    public function create(Request $request){
      $this->validate($request,[
        'property_type_name'=>'required|string'
      ]);

      $type = new PropertyType;
      $type->property_type_name = $request->input('property_type_name');
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
}
