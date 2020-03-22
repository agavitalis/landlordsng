<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function become_an_agent(){
        return view("agent_registration");
    }
}
