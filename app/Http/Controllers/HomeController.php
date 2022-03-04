<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Eventreg;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            return View('user.home');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function showEvent($id){
        $event_details = event::find($id);
        $creator_id = $event_details->creator;
        $creator_name = user::find($creator_id);
        $event_details->creatorname = $creator_name->name;
        $event_details->refund == 1 ?  $event_details->refund = "Refunds available" : $event_details->refund = "No Refunds";      
        return view('event', compact('event_details'));
       
    }

    public function eventReg(Request $request){
        $eventreg = new Eventreg;
        $eventreg->regName = $request->regName;
        $eventreg->regEmail = $request->regEmail;
        $eventreg->regNoTickets = $request->regNoTickets;
        $eventreg->eventId = $request->eventId;
        $eventreg->save();
        $data = [
            'status' => '1',
            'msg' => 'Registration Successful'
        ];
        return response()->json($data);
    }
}
