<?php

namespace App\Http\Controllers;
use App\calendario_empresa;
use Calendar;

use Illuminate\Http\Request;

class EventCalendar extends Controller
{
    //
    

    public function index(){
        $events = [];
        $data = calendario_empresa::all();
        if($data->count()) {
            return view('admin.config')->with('eventos',$data);
        }
        else{
            return view('admin.config');
        }
        // $calendar = Calendar::addEvents($events);
        // $calendar = Calendar::;
        
    }
}
