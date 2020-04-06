<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AgencyRequest;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\User;
use Auth;


class AgencyController extends Controller
{
    public function index(){
        $agencies = Agency::paginate(100);
        return view('agencies',compact('agencies'));
    }

    public function agency_profile($id = null){
        $agency = Agency::find($id);
        return view('agencies_profile',compact('agency'));
    }

    public function become_an_agency(Request $request, $id = null){
        if ($request->isMethod('GET')) {
            return view("agency_registration");

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
        //upload discription image and create garden
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;

        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }

}
