<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use View;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(Request $request)
    {

        if ($request->isMethod('GET')) {

            return view('profile');

        } else if ($request->isMethod("POST")) {
           if($request->action == "profile"){

                $this->validate($request, [
                    'name' => "string|required",
                    'phone' => "string|required",
                    'biography' => "string|required",
                ]);

                $user = Auth::user();
                $user->name = $request->name;
                $user->phone = $request->phone;
                $user->biography = $request->biography;
                $user->update();

                return back()->with('success','Profile Update Successful');

           }else if($request->action == "social"){

                $this->validate($request, [
                    'linkedIn_url' => "string|nullable",
                    'facebook_url' => "string|nullable",
                    'twitter_url' => "string|nullable",
                ]);

                $user = Auth::user();
                $user->linkedln_url = $request->linkedIn_url;
                $user->facebook_url = $request->facebook_url;
                $user->twitter_url = $request->twitter_url;
                $user->update();

                return back()->with('success','Social Links Updated Successfully');
           
            }else if($request->action == "password"){

                $this->validate($request, [
                    'old_password' => 'string|required',
                    'new_password' => 'string|required',
                    'confirm_password' => 'string|required',
                ]);

                if($request->new_password == $request->confirm_password){

                    $user = User::findOrFail(Auth::user()->id);

                    if (Hash::check($request->old_password, $user->password)) {
                        $user->password = Hash::make($request->new_password);
                        $user->update();

                        return back()->with('success','Passwords Updated Successfully');
                    } else {
                        return back()->with('errors','Passwords  Invalid');
                    }
                }else{

                    return back()->with('errors','Passwords  mismatch');
                }
                
            }
           
        }
    }

    public function saved_properties(){
        return view('contact');
    }

}
