<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{
    public function index(){
        $agencies = Agency::paginate(100);
        return view('agencies',compact('agencies'));
    }

    public function agency_profile($id = null){
        $agency = Agency::find($id);
        return view('agencies_profile',compact('agency'));
    }
}


