<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgentRequest;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Exception;
use Auth;

class AgencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('adminGuard');
    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            
            return view('admin.agencies');

        }else if($request->isMethod('POST')){
            try {
                    $user_id = self::getUser($request->email);
                    if( $user_id){
                        $profile_picture = self::uploadImage($request,'profile_picture');

                        Agency::create(['agency_name'=>$request->agency_name,'founder'=>$request->founder,
                        'email'=>$request->email, 'phone'=>$request->phone, 'biography'=>$request->biography,
                        'address'=>$request->address,'profile_picture'=>$profile_picture,
                        'instagram'=>$request->instagram,'user_id'=>$user_id,
                        'twitter'=>$request->twitter,'facebook'=>$request->facebook,'website'=>$request->website]);
            
                        return back()->with('success','Agency successfully created');
                    }else{
                        return back()->with('error','This email does not belong to a registered user');
                    } 
              
            }catch (Exception $e) {
                return back()->with('error',$e->getMessage());
            }
             
        }
    }

    public function manage_agencies(Request $request)
    {
        if($request->isMethod('GET')){
            
            $agencies = Agency::paginate(100);
            return view('admin.manage_agencies',compact('agencies'));

        }
    }
    public function become_an_agent(Request $request)
    {
        if($request->isMethod('GET')){
            $agent_requests = Agency::find(Auth::user()->agency_id)->agent_request;
            return view('admin.become_an_agent',compact('agent_requests'));

        }else if($request->isMethod('POST')){
            try {
                if($request->action == "approve"){

                    $agent_requests = AgentRequest::find($request->id);
                    
                    Agent::create(['agent_name'=>$agent_requests->name,'email'=>$agent_requests->email,
                    'phone'=>$agent_requests->phone, 'biography'=>$agent_requests->message,
                    'agency_id'=>$agent_requests->agency_id,'user_id'=>$agent_requests->user_id,]);
                    
                    $agent_requests->delete();
                    return response()->json(array('success' => 'Request granted'));

                }else if($request->action == "pend"){

                    AgentRequest::find($request->id)->update(['status' => 0]);
                    return response()->json(array('success' => 'Request pended'));

                }
                else if($request->action == "delete"){
                    
                    AgentRequest::find($request->id)->delete();
                    return response()->json(array('success' => 'Request deleted'));

                }
            }catch (Exception $e) {
                return response()->json(array('error' => $e));
                
            }
        }
    }

    public function uploadImage($request,$file_name)
    {
        //upload discription image and create garden
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;
        
        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }

    public function getUser($email)
    {
        $user = User::where(['email'=>$email])->first();
        if($user){
            return $user->id;
        }else{
            return null;
        }
    }
}
