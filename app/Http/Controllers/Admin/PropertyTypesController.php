<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyType;

class PropertyTypesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
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
        'property_name'=>'required',
        'property_type'=>'required'
      ]);

      $type =new PropertyType;
      $type->property_type = $request->input('property_type');
      $type->property_name = $request->input('property_name');
      $type->save();
      return response($type);
    }
}
