<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgencyRequest;
use App\Models\AgentRequest;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Auth;


class AgencyController extends Controller
{
    public function index(){
        $agencies = Agency::paginate(100);
        return view('user.agency.agencies',compact('agencies'));
    }

    public function agency_profile($id = null){
        $agency = Agency::find($id);
        return view('user.agency.agency_profile',compact('agency'));
    }

    public function agent_requests(){

        $agent_requests = AgentRequest::where(['agency_id'=> Auth::user()->agency_id])->get();
        return view('user.agency.agent_requests',compact('agent_requests'));
    }

    public function agent_requests_approve(Request $request, $id = null){

        $agent_requests = AgentRequest::find($request->id);

        Agent::create(['agent_name' => $agent_requests->name, 'email' => $agent_requests->email,
            'phone' => $agent_requests->phone, 'biography' => $agent_requests->message,
            'agency_id' => $agent_requests->agency_id, 'user_id' => $agent_requests->user_id]);

        $agent_requests->delete();
        return back()->with('success', 'Request Approved');

    }

    public function agent_requests_reject(Request $request, $id = null){
        AgentRequest::find($request->id)->delete();
        return back()->with('success', 'Request Approved');
    }

    public function my_agents(){

        $agents = Agent::where(['agency_id'=> Auth::user()->agency_id])->get();
        return view('user.agency.my_agents',compact('agents'));
    }

    public function become_an_agency(Request $request, $id = null){
        if ($request->isMethod('GET')) {
            return view("user.agency.agency_registration");

        }else if ($request->isMethod('POST')) {

            try {

                $user_id = self::getUser($request->email);
                if ($user_id) {
                    $checkAgency = self::checkAgency();
                    if (!$checkAgency) {

                        $profile_picture = self::uploadImage($request, 'profile_picture');

                        AgencyRequest::create(['agency_name' => $request->agency_name, 'founder' => $request->founder,
                        'email' => $request->email, 'phone' => $request->phone, 'biography' => $request->message,
                        'address' => $request->address,'profile_picture'=> $profile_picture,'user_id'=>$user_id]);

                        return back()->with('success', 'The Admins have been notified on your request to become an Agency');

                    } else {
                        return back()->with('success', 'You are already have an agency');
                    }
                } else {
                    return back()->with('errors', 'This email does not belong to a registered user');
                }

            } catch (Exception $e) {
                return back()->with('errors', $e->getMessage());
            }

        }
    }

    public function edit_agency_details(Request $request){
       
        if($request->isMethod('GET')){

            $agency = Agency::where(['user_id'=>Auth::user()->id])->first();
            return view('user.agency.edit_agency_details',compact('agency'));

        }
        else if($request->isMethod('POST')){

            if($request->hasFile('profile_picture')){

              $profile_picture = self::uploadImage($request, 'profile_picture');

            }else{

              $agency = Agency::where(['user_id'=>Auth::user()->id])->first();
              $profile_picture = $agent->profile_picture;

            }

              $agency = Agency::where(['user_id'=>Auth::user()->id])->first();
              $agency->agency_name = $request->agency_name;
              $agency->email = $request->email;
              $agency->phone = $request->phone;
              $agency->biography = $request->biography;
              $agency->instagram = $request->instagram;
              $agency->twitter = $request->twitter;
              $agency->facebook = $request->facebook;
              $agency->linkedin = $request->linkedin;
              $agency->website = $request->website;
              $agency->profile_picture = $profile_picture;
              $agency->update();

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

    private function checkAgency()
    {
        $user = Agency::where(['user_id' => Auth::user()->id])->first();
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

}
