<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyRequest;
use App\Models\AgentRequest;
use App\Models\Agency;
use App\Models\Agent;
use App\Http\Resources\AgentRequestResource;
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

    public function create_agency(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.create_agency');
        } else if ($request->isMethod('POST')) {

            try {
                $user_id = self::getUser($request->email);

                if ($user_id) {

                    $checkAgency = self::checkAgency($user_id);
                    if (!$checkAgency) {
                        $profile_picture = self::uploadImage($request, 'profile_picture');
                        
                        $agency = Agency::create(['agency_name' => $request->agency_name, 'founder' => $request->founder,
                            'email' => $request->email, 'phone' => $request->phone, 'biography' => $request->biography,
                            'address' => $request->address, 'profile_picture' => $profile_picture,
                            'instagram' => $request->instagram, 'user_id' => $user_id,
                            'twitter' => $request->twitter, 'facebook' => $request->facebook, 'website' => $request->website]);

                        //update this user as an agency
                    
                        User::find($user_id)->update(['agency_id'=>$agency->id]);
                        if(Agent::where(['user_id'=>$user_id])->count() > 0){
                            Agent::update(['agency_id'=>$agent->id])->where(['user_id'=>$user_id]);
                        }

                        return back()->with('success', 'Agency successfully created');
                    }else{
                        return back()->with('errors', 'This email is already an Agency');
                    }

                } else {
                    return back()->with('errors', 'This email does not belong to a registered user');
                }

            } catch (Exception $e) {
                return back()->with('errors', $e->getMessage());
            }

        }
    }

    public function manage_agencies(Request $request, $id = null)
    {
        if ($request->isMethod('GET') && $id == null) {

            $agencies = Agency::paginate(100);
            return view('admin.manage_agencies', compact('agencies'));

        }else{

            $agency = Agency::findOrFail($id);
            return view('admin.agency_profile', compact('agency'));
        }
    }

    public function become_an_agency(Request $request)
    {
        if ($request->isMethod('GET')) {
            $agency_requests = AgencyRequest::all();
            return view('admin.become_an_agency', compact('agency_requests'));

        } else if ($request->isMethod('POST')) {
            try {
                if ($request->action == "approve") {

                    $agency_requests = AgencyRequest::find($request->id);

                    $agency = Agency::create(['agency_name' => $agency_requests->agency_name, 'founder' => $agency_requests->founder,
                        'email' => $agency_requests->email, 'phone' => $agency_requests->phone,
                        'biography' => $agency_requests->biography, 'address' => $agency_requests->address,
                        'profile_picture' => $agency_requests->profile_picture, 'user_id' => $agency_requests->user_id
                    ]);

                   
                    //update this user as an agency
                    User::find($agency_requests->user_id)->update(['agency_id'=>$agency->id]);
                    if(Agent::where(['user_id'=>$agency_requests->user_id])->count() > 0){
                        Agent::update(['agency_id'=>$agency->id])->where(['user_id'=>$agency_requests->user_id]);
                    }

                    $agency_requests->delete();
                   
                    return response()->json(array('success' => 'Request granted'));

                } else if ($request->action == "pend") {

                    AgencyRequest::find($request->id)->update(['status' => 0]);
                    return response()->json(array('success' => 'Request pended'));

                } else if ($request->action == "delete") {

                    AgencyRequest::find($request->id)->delete();
                    return response()->json(array('success' => 'Request deleted'));

                }
            } catch (Exception $e) {
                return response()->json(array('error' => $e));

            }
        }
    }

    public function uploadImage($request, $file_name)
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
        $user = User::where('email', $email)->first();
        if ($user) {
            return $user->id;
        } else {
            return null;
        }
    }

    public function edit_agency(Request $request, $id)
    {
        if ($request->isMethod('GET')) {
            $agency = Agency::findOrFail($id);
            return view('admin.edit_agency', compact('agency'));
        } else if ($request->isMethod('POST')) {
            $name = $request->agency_name;
            $agency = Agency::where('agency_name', "=", $name)->first();

            if ($request->hasFile('profile_picture')) {
                $profile_picture = self::uploadImage($request, 'profile_picture');
            } else {
                $profile_picture = $agency->profile_picture;
            }
            $agency->agency_name = $request->agency_name;
            $agency->founder = $request->founder;
            $agency->email = $request->email;
            $agency->phone = $request->phone;
            $agency->address = $request->address;
            $agency->biography = $request->biography;
            $agency->twitter = $request->twitter;
            $agency->facebook = $request->facebook;
            $agency->instagram = $request->instagram;
            $agency->profile_picture = $request->profile_picture;
            $agency->website = $request->website;
            $agency->linkedin = $request->linkedin;
            $agency->save();
            return back()->with('success', 'successfully updated the ');
        }
    }

    private function checkAgency($user_id)
    {
        $user = Agency::where(['user_id' => $user_id])->first();
        if ($user) {
            return $user->id;
        } else {
            return null;
        }
    }


}
