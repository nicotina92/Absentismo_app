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
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                 [
                     'color' => '#ff0000',
                     'url' => 'pass here url and any route',
                 ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('admin.config', compact('calendar'));
    }
}
