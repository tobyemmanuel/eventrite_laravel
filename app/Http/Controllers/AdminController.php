<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        return view('user.manage_event');
    }
}