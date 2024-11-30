<?php

namespace App\Http\Controllers;
use App\Models\dashboard;

use Illuminate\Http\Request;

class PublicController
{
    public function welcome(){
    
     $dashboards = dashboard::all();
     return view('principalPage',compact('dashboards'));
    }
}
