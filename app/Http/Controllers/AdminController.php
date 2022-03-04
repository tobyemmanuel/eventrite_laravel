<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Eventreg;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_view(){
        return view('user.add_event');
    }

    public function upload(Request $request){
        $event = new event;
        $image = $request->eventBanner;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->eventBanner->move('event', $imagename);
        $event->eventBanner = $imagename;
        $event->eventName = $request->eventName;
        $event->eventStartDate = $request->eventStartDate;
        $event->eventStartDateTime = $request->eventStartDateTime;
        $event->eventEndDate = $request->eventEndDate;
        $event->eventEndDateTime = $request->eventEndDateTime;
        $event->eventPrice = $request->eventPrice;
        $event->eventLocation = $request->eventLocation;
        $event->eventDesc = $request->eventDesc;
        $event->refund = $request->refund;
        $event->creator = Auth::user()->id;
        $event->save();
        return redirect()->back()->with('message','Event added successfully.');
    }

    public function manage_event_view(){
        $event_details = event::where('creator', '=', Auth::user()->id)->get();
        for($x=0; $x < count($event_details); $x++){
           $countreg = eventreg::where('eventId', '=', $event_details[$x]->id)->count();
        $event_details[$x]->regcount = $countreg;
        $event_details[$x]->eventLocation = (strlen($event_details[$x]->eventLocation)> 13)? substr($event_details[$x]->eventLocation, 0, 10).'...': $event_details[$x]->eventLocation;
        }
        return view('user.manage_event', compact('event_details'));
    }
}