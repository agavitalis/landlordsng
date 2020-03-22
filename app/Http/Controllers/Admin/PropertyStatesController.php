<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Http\Resources\PropertyStatusResource;

class PropertyStatesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('adminGuard');
    }

    public function propertystates()
    {
        // $users_count = User::count();
        // $series_count = Series::count();
        // $pro_investors_count = ProInvestor::count();
        // $investors_count = Investor::count();
        //return view('admin. propertytypes', compact('series_count','users_count','pro_investors_count','investors_count'));
        return view('admin.propertystates');
    }

    public function create(Request $request){
      $this->validate($request,[
        'property_status_name'=>'required|string'
      ]);

      $status =new PropertyStatus;
      $status->property_status_name = $request->input('property_status_name');
      $status->save();
      return response($status);
    }

    public function getStatuses(){
      $statuses =PropertyStatus::paginate(3);
      return PropertyStatusResource::collection($statuses);
    }

    public function updatePropertyStatus(Request $request){
      $this->validate($request,[
        'id'=>'required',
        'property_status_name'=>'required'
      ]);

      $id = $request->input('id');
      $status = PropertyStatus::findOrFail($id);
      $status->property_status_name =$request->input('property_status_name');
      $status->save();
      return $status;
    }

    public function destroy($id)
    {
        //find and delete a Room with a particular id
        $status =PropertyStatus::find($id);
        $status->delete();

        return response()->json(['status'=>'ok'], 200);
    }
}
