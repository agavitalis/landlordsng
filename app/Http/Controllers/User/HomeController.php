<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        
        return view('welcome', compact('agencies','agents'));
    }

    public function home()
    {
        return view('home');
    }
}
