<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\Agency;
use App\Models\Agent;


class HomeController extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $agencies = Agency::all();
        $agents = Agent::all();
        $property_types = PropertyType::orderBy('created_at','desc')->withCount('property')->get();
        $property_status = PropertyStatus ::orderBy('created_at','desc')->with(['property' => function ($query) {
            $query->limit(12);
        }])->get();

        return view('welcome', compact('agencies','agents','property_types','property_status'));
    }

    public function home()
    {
        return view('home');
    }
}
