<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\Agent;
use View;
use App\Models\User;
use Auth;
use Hash;
class ProfileController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth')->except('edit_password','edit_pics','edit_links');
    }

    public function profile(Request $request){

      if($request->isMethod('GET')){
        return view('profile');
      }else if($request->isMethod("POST")){
        $this->validate($request,[
          'name'=>"string|required",
          'email'=>"string|required",
          'phone'=>"string|required"
        ]);
        $user= Auth::user();
        $user->name= $request->name;
        $user->email=$request->email;
        $user->phone= $request->phone;
        $user->update();
        return view('profile');
      }
    }

    public function edit_password(Request $request, $id){

      $this->validate($request,[
        'old_password'=>'string|required',
        'new_password'=>'string|required',
      ]);
    $user =User::findOrFail($id);
    if (Hash::check($request->old_password,$user->password)){
      $user->password = Hash::make($request->new_password);
      $user->update();
      return response()->json("password is updated successfully");
    }else{
      return response()->json("Password is Invalid");
      }
    }

    public function edit_links(Request $request, $id){
      $user =User::findOrFail($id);
      $user->fb_url = $request->input('fb_url');
      $user->linkedln_url = $request->input('linkedln_url');
      $user->twitter_url = $request->input('twitter_url');
      $user->save();
      return response()->json("Social Links successfully updated");
    }

    public function edit_pics(){

    }
}
