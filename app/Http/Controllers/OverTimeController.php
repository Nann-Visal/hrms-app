<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OverTime;
use App\Models\Employees;

class OverTimeController extends Controller
{
    //index
    public function index(Request $request){
        $overtimes = OverTime::when(isset($request->date) || (isset($request->employee_id) && $request->employee_id != ''), function($query) use($request) {
            $query->orWhere('date', $request->date)
            ->orWhere('employee_id', $request->employee_id);
        })->orderby('id','desc')->latest()->limit(15)->get();
        $employees_id = OverTime::pluck('employee_id');
        $employees = Employees::whereIn('id', $employees_id)->pluck('full_name', 'id');
        return view('overtimes.index',['overtimes'=>$overtimes, 'employees' => $employees]);
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
