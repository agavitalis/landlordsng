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


class PropertyListController extends Controller
{
    public function property_list(Request $request)
    {
        if ($request->isMethod('GET')) {

                     
            return view('property_list');

        }else if($request->isMethod('POST')){
          
           
        }
       
    }

   

   
}
