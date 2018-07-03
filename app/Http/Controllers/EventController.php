<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Event;
 
use Calendar;
 

//event controller es la que se usa para hacer todos los turnos aca se toca todo
class EventController extends Controller
{
    public function index(){
    	$events = Event::get();
        $event_list = [];
    	foreach ($events as $key => $event) {
            
    		$event_list[] = Calendar::event(
                $event->title,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list); 

        return view('consultarTurno', compact('calendar_details') );
    }
 
    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
 
        if ($validator->fails()) {
        	\Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/consultarTurno')->withInput()->withErrors($validator);
        }
 
        $event = new Event;
        $event->title = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->save();
 
        \Session::flash('success','Event added successfully.');
        return Redirect::to('/consultarTurno');
    }
 
 
}
 