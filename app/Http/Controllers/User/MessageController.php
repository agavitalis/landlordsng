<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Auth;

class MessageController extends Controller
{
    public function agency_messages(Request $request, $id = null)
    {
        if ($request->isMethod("GET")) {

            $agency = Agency::where('user_id',Auth::user()->id)->first();
            $messages = $agency->messages;

            
            return view('user.agency.agency_messages', compact('messages'));
        }
        else if ($request->isMethod("POST")) {

            $agency = Agency::find($request->agency_id);
            $agency->messages()->create([
                'message_body' => $request->message_body,
                'message_reply_body' => $request->message_reply_body,
                'user_id' => Auth::user()->id,
            ]);

            return back()->with('success', 'Message successfully sent');

        }
    }

    public function agent_messages(Request $request, $id = null)
    {
        if ($request->isMethod("GET")) {

            $agent = Agent::where('user_id', Auth::user()->id)->first();
            $messages = $agent->messages;

            return view('user.agent.agent_messages', compact('messages'));

        }
        else if ($request->isMethod("POST")) {

            $agent = Agent::find($request->agent_id);
            $agent->messages()->create([
                'message_body' => $request->message_body,
                'message_reply_body' => $request->message_reply_body,
                'user_id' => Auth::user()->id,
            ]);

            return back()->with('success', "Message successfully sent");

        } 
    }

    public function my_messages(Request $request, $id = null)
    {
        if ($request->isMethod("GET")) {

            $messages = Message::where('user_id', Auth::user()->id)->all();
            return view('user.my_messages', compact('messages'));

        }
      
    }
}
