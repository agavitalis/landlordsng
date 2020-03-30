<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\AgentRequest;
use App\Http\Resources\AgentRequestResource;
use App\Models\User;
use Auth;
use Exception;


class AgentController extends Controller
{
    
    public function become_an_agent(Request $request)
    {
        if ($request->isMethod('GET')) {
            $agent_requests = Agency::find(Auth::user()->agency_id)->agent_request;
            return view('admin.become_an_agent', compact('agent_requests'));

        } else if ($request->isMethod('POST')) {
            try {
                if ($request->action == "approve") {

                    $agent_requests = AgentRequest::find($request->id);

                    Agent::create(['agent_name' => $agent_requests->name, 'email' => $agent_requests->email,
                        'phone' => $agent_requests->phone, 'biography' => $agent_requests->message,
                        'agency_id' => $agent_requests->agency_id, 'user_id' => $agent_requests->user_id]);

                    $agent_requests->delete();
                    return response()->json(array('success' => 'Request granted'));

                } else if ($request->action == "pend") {

                    AgentRequest::find($request->id)->update(['status' => 0]);
                    return response()->json(array('success' => 'Request pended'));

                } else if ($request->action == "delete") {

                    AgentRequest::find($request->id)->delete();
                    return response()->json(array('success' => 'Request deleted'));

                }
            } catch (Exception $e) {
                return response()->json(array('error' => $e));

            }
        }
    }
}
