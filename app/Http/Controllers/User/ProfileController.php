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
      $this->middleware('auth')->except(['edit_password','edit_pics','edit_links']);
    }

    public function profile(){
      return view('profile');
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

    public function edit_links(){

    }
    public function edit_details(){

    }

    public function edit_pics(){
      
    }
}
