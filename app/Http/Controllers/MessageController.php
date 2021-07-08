<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    // route gets all messages from the database and displays them inside the message index view
    public function index() {
        $messages = DB::table('messages')
            ->select('*')
            ->get();
        
        return view('messages.index')
            ->with('messages', $messages);
    }

    // route receives a request object holding form data to create a new message; store the message in the database; pseudo-email system
    public function post(Request $request) {
        // check if the request was formed properly with the required form inputs
        if ($request->has(["name", "email", "message"])) {
            // gather all of the message details
            $name = $request->input("name");
            $email = $request->input("email");
            $messageText = $request->input("message");

            // create a new message and add all of the user input into it; no queries are being made here so this is safe to do
            $message = new Message;
            $message->name = $name;
            $message->email = $email;
            $message->message = $messageText;

            // save the new message into the database
            $message->save();
            
            // flash session data with success status
            $request->session()->flash('appStatus', ["status" => "success", "message" => "Message was sent!"]);
        }
        // flash session data with fail status; ideally this should never be run
        else $request->session()->flash('appStatus', ["status" => "fail", "message" => "Required contact info missing. Message could not be sent."]);

        // redirect to the homepage and notify the user of the status
        return redirect('/');
    }

    public function delete(Request $request, $id) {
        // get the message by the id provided; id should always be valid and always a number
        $message = Message::find($id);

        // if message was found
        if ($message) {
            // delete the message from the database
            $message->delete();
            
            // flash session data with success status
            $request->session()->flash('appStatus', ["status" => "success", "message" => "Message was deleted!"]);
        }
        // flash session data with fail status; ideally this should never be run
        else $request->session()->flash('appStatus', ["status" => "fail", "message" => "Message id of \"$id\" could not be found. No message deleted."]);
        
        // redirect to the messages page and notify user of the status
        return redirect('/messages');
    }
}
