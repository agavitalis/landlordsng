<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use App\Models\AgentRequest;
use Auth;


class AgentController extends Controller
{
    public function index(){
        $agents = Agent::paginate(50);
        return view('agents',compact('agents'));
    }

    public function agent_profile($id = null){
        
        $agent = Agent::where(['id'=>$id])->first();
        return view('agent_profile', compact('agent'));
    }

    public function become_an_agent(Request $request, $id = null){
        if ($request->isMethod('GET')) {

            $agency = Agency::find($id);
            return view("agent_registration",compact('agency'));
        }
        else if ($request->isMethod('POST')) {
            try {

                $user_id = self::getUser($request->email);
                if ($user_id) {
                    $checkAgent = self::checkAgent();
                    if (!$checkAgent) {

                        AgentRequest::create(['name' => $request->name, 'phone' => $request->phone,
                            'email' => $request->email, 'message' => $request->message, 'user_id' => $user_id,
                            'agency_id' => $request->agency_id]);
                        return back()->with('success', 'Agent Request successfully created');

                    } else {
                        return back()->with('success', 'You are already an agent');
                    }
                } else {
                    return back()->with('error', 'This email does not belong to a registered user');
                }

            } catch (Exception $e) {
                return back()->with('error', $e->getMessage());
            }

        }
    }

    public function edit_agent_details(Request $request){
        if($request->isMethod('GET')){
            return view('edit_agent_details');
        }
    }

    private function getUser($email)
    {
        $user = User::where(['email' => $email])->first();
        if ($user) {
            return $user->id;
        } else {
            return null;
        }
    }

    private function checkAgent()
    {
        $user = Agent::where(['user_id' => Auth::user()->id])->first();
        if ($user) {
            return $user->id;
        } else {
            return null;
        }
    }
}
