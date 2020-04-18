<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use App\Models\AgentRequest;
use App\Models\Message;
use Auth;


class AgentController extends Controller
{
    public function index(){
        $agents = Agent::paginate(50);
        return view('user.agent.agents',compact('agents'));
    }

    public function agent_profile($id = null){

        $agent = Agent::where(['id'=>$id])->first();
        return view('user.agent.agent_profile', compact('agent'));
    }

    public function become_an_agent(Request $request, $id = null){
        if ($request->isMethod('GET')) {

            $agency = Agency::find($id);
            return view("user.agent.agent_registration",compact('agency'));
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

            $agent = Agent::where(['user_id'=>Auth::user()->id])->first();

            if($agent == null){
                return back()->with('errors', 'You are not yet an agent');
            }

            return view('user.agent.edit_agent_details', compact('agent'));
        }
        else if($request->isMethod('POST')){

          if($request->hasFile('profile_picture')){

            $profile_picture = self::uploadImage($request, 'profile_picture');

          }else{

            $agent = Agent::where(['user_id'=>Auth::user()->id])->first();
            $profile_picture = $agent->profile_picture;

          }

          $agent = Agent::where(['user_id'=>Auth::user()->id])->first();
          $agent->agent_name = $request->agent_name;
          $agent->email = $request->email;
          $agent->phone = $request->phone;
          $agent->biography = $request->biography;
          $agent->address = $request->address;
          $agent->instagram = $request->instagram;
          $agent->twitter = $request->twitter;
          $agent->facebook = $request->facebook;
          $agent->linkedin = $request->linkedin;
          $agent->website = $request->website;
          $agent->profile_picture = $profile_picture;
          $agent->update();

          return back()->with("success", "Successfully updated agents profile");
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

    public function uploadImage($request, $file_name)
    {
        //upload discription image
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;

        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        $profile_picture = \App::make( 'url' )->to( '/' ).'/storage/uploads/'.$new_name;

        return $profile_picture;
    }

    public function message(Request $request, $id=null){
        if($request->isMethod("POST")){
          $agent= Agent::find($request->agent_id);
          $agent->messages()->create([
            'message_body'=>$request->message_body,
            'message_reply_body'=>$request->message_reply_body,
            'user_id'=>Auth::user()->id
          ]);

          return back()->with('agent',$agent);
        }else if ($request->isMethod("GET")){
          $agent = Agent::where('user_id', $id)->first();
          $messages= $agent->messages;
          return view('user.agent.agent_messages', compact('messages'));
        }
    }
}
