<?php

namespace App\Http\Controllers;
use App\Models\PendingLeave;
use App\Models\Employees;

use Illuminate\Http\Request;

class PendingLeaveController extends Controller
{
    //index
    public function index(){
        $pendingleaves = PendingLeave::orderby('id','desc')->get();
        return view('pendingleaves.index-pendingleaves',['pendingleaves'=> $pendingleaves]);
    }
    //create
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('pendingleaves.create',compact('employees'));
    }
    //show
    public function show($id){
        $pendingleave = PendingLeave::find($id);
        return view('pendingleaves.show')->with('pendingleave',$pendingleave);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'start_date'     => 'required',
            'duration'       => 'required',
            'position'       => 'required|string|max:50',
            'reason'         => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        PendingLeave::create($request->all());
        $message = "pending-leave has been add successfully";
        return redirect()->route('pendingleaves.index-pendingleaves')->with('message',$message);
    }
    //edit
    public function edit($id){
        $pendingleave = PendingLeave::findOrFail($id);
        $employees    = Employees::pluck('full_name','id');
        return view('pendingleaves.edit',compact('pendingleave','employees'));
    }
    //update
    public function update(Request $request, $id){
        $pendingleave = PendingLeave::findOrFail($id);
        $request->validate([
            'start_date'     => 'required',
            'duration'       => 'required',
            'position'       => 'required|string|max:50',
            'reason'         => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $pendingleave->update($request->all());
        $message = "pending has been update successfully";
        return redirect()->route('pendingleaves.index-pendingleaves')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $pendingleave = PendingLeave::findOrFail($id);
        $pendingleave->delete();
        $message = "pending has been removed successfully";
        return redirect()->route('pendingleaves.index-pendingleaves')->with('message',$message);
    }
}
