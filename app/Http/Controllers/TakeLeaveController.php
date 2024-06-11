<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TakeLeave;
use App\Models\Employees;

class TakeLeaveController extends Controller
{
    //index
    public function index(){
        $takeleaves = TakeLeave::orderby('id','desc')->get();
        return view('takeleaves.index-takeleaves',['takeleaves'=> $takeleaves]);
    }
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('takeleaves.create',compact('employees'));
    }
    //show
    public function show($id){
        $takeleave = TakeLeave::find($id);
        return view('takeleaves.show')->with('takeleave',$takeleave);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'start_date'     => 'required',
            'duration'       => 'required',
            'reason'         => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        TakeLeave::create($request->all());
        $message = "take-leave has been add successfully";
        return redirect()->route('takeleaves.index-takeleaves')->with('message',$message);
    }
    //edit
    public function edit($id){
        $takeleave = TakeLeave::findOrFail($id);
        $employees  = Employees::pluck('full_name','id');
        return view('takeleaves.edit',compact('takeleave','employees'));
    }
    //update
    public function update(Request $request, $id){
        $takeleave = TakeLeave::findOrFail($id);
        $request->validate([
            'start_date'     => 'required',
            'duration'       => 'required',
            'reason'         => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $takeleave->update($request->all());
        $message = "takeleave has been update successfully";
        return redirect()->route('takeleaves.index-takeleaves')->with('message',$message);
    }
    public function destroy($id){
        $takeleave = TakeLeave::findOrFail($id);
        $takeleave->delete();
        $message = "takeleave has been removed successfully";
        return redirect()->route('takeleaves.index-takeleaves')->with('message',$message);
    }
}
