<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Employees;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //index
    public function index(Request $request){
        $events = Event::when(isset($request->date) || (isset($request->employee_id) && $request->employee_id != ''), function($query) use($request) {
            $query->orWhere('date', $request->date)
            ->orWhere('employee_id', $request->employee_id);
        })->orderby('id','desc')->latest()->limit(15)->get();
        $employees_id = Event::pluck('employee_id');
        $employees = Employees::whereIn('id', $employees_id)->pluck('full_name', 'id');
        return view('events.index',['events'=>$events, 'employees' => $employees]);
    }
    //create
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('events.create',compact('employees'));
    }
    //show
    public function show($id){
        $event = Event::find($id);
        return view('events.show')->with('event',$event);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'event_name'     => 'required|string|max:50',
            'date'           => 'required',
            'start_time'     => 'required',
            'end_time'       => 'required',
            'subject'        => 'required|string|max:150',
            'descibtion'    => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        Event::create($request->all());
        $message = "event has been add successfully";
        return redirect()->route('events.index')->with('message',$message);
    }
    //edit
    public function edit($id){
        $event = Event::findOrFail($id);
        $employees = Employees::pluck('full_name','id');
        return view('events.edit',compact('event','employees'));
    }
    //update
    public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        $request->validate([
            'event_name'     => 'required|string|max:50',
            'date'           => 'required',
            'start_time'     => 'required',
            'end_time'       => 'required',
            'subject'        => 'required|string|max:150',
            'descibtion'    => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $event->update($request->all());
        $message = "event has been update successfully";
        return redirect()->route('events.index')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $event = Event::findOrFail($id);
        $event->delete();
        $message = "event has been removed successfully";
        return redirect()->route('events.index')->with('message',$message);
    }
}
