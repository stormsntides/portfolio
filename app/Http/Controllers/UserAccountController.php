<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserAccountController extends Controller
{
    // route gets all users from the database and displays them inside the user index view
    public function index() {
        $users = DB::table('users')
            ->select('*')
            ->get();
        
        return view('users.index')
            ->with('users', $users);
    }

    public function delete(Request $request, $id) {
        // get the user by the id provided; id should always be valid and always a number
        $user = User::find($id);

        // if user was found
        if ($user) {
            // delete the user from the database
            $user->delete();
            
            // flash session data with success status
            $request->session()->flash('appStatus', ["status" => "success", "message" => "User was deleted!"]);
        }
        // flash session data with fail status; ideally this should never be run
        else $request->session()->flash('appStatus', ["status" => "fail", "message" => "User id of \"$id\" could not be found. No user deleted."]);
        
        // redirect to the users page and notify user of the status
        return redirect('/users');
    }
}
