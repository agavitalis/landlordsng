<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\User;
use Exception;
use Auth;

class AgencyController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('adminGuard');
    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            
            $agencies = Agency::paginate(100);
            return view('admin.agencies',compact('agencies'));

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
              
              } catch (Exception $e) {
                    return back()->with('error',$e->getMessage());
              }
             
        }
    }

    public function become_an_agent(Request $request)
    {
        if($request->isMethod('GET')){

            $agency_request = Agency::find(Auth::user()->agency_id)->agency_request;
            return view('admin.become_an_agent',compact('agency_request'));

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
