<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OverTime;
use App\Models\Employees;

class OverTimeController extends Controller
{
    //index
    public function index(){
        $overtimes = OverTime::orderby('id','desc')->get();
        return view('overtimes.index',['overtimes'=>$overtimes]);
    }
    //create
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('overtimes.create',compact('employees'));
    }
    //store
    public function store(Request $request){
        $request->validate([
            'date'           => 'required',
            'hour'           => 'required',
            'sign_in_time'   => 'required',
            'sign_out_time'  => 'required',
            'salary_per_hour'=> 'required',
            'note'           => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        OverTime::create($request->all());
        $message = "over-time has been paied successfully";
        return redirect()->route('overtimes.index')->with('message',$message);
    }
    //edit
    public function edit($id){
        $overtime     = OverTime::findOrFail($id);
        $employees    = Employees::pluck('full_name','id');
        return view('overtimes.edit',compact('overtime','employees'));
    }
    //update
    public function update(Request $request, $id){
        $overtime     = OverTime::findOrFail($id);
        $request->validate([
            'date'           => 'required',
            'hour'           => 'required',
            'sign_in_time'   => 'required',
            'sign_out_time'  => 'required',
            'salary_per_hour'=> 'required',
            'note'           => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $overtime->update($request->all());
        $message = "over time has been update successfully";
        return redirect()->route('overtimes.index')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $overtime     = OverTime::findOrFail($id);
        $overtime->delete();
        $message = "over time has been removed successfully";
        return redirect()->route('overtimes.index')->with('message',$message);
    }
}
