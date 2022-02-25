<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}
