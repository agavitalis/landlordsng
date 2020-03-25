<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PropertyController extends Controller
{
    public function add_property()
    {
        return view('submit_property');
    }

    public function my_properties()
    {
        return view('my_properties');
    }
}
