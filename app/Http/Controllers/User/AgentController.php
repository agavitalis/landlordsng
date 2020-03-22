<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;


class AgentController extends Controller
{
    public function become_an_agent($id = null){

        $agency = Agency::find($id);
        return view("agent_registration",compact('agency'));
    }
}
