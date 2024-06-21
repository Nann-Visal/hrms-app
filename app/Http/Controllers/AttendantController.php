<?php

namespace App\Http\Controllers;
use App\Models\Attendants;
use App\Models\Employees;

use Illuminate\Http\Request;

class AttendantController extends Controller
{
    //index
    public function index(Request $request){
        $attendants = Attendants::when(isset($request->date) || (isset($request->employee_id) && $request->employee_id != ''), function($query) use($request) {
            $query->orWhere('date', $request->date)
            ->orWhere('employee_id', $request->employee_id);
        })
        ->orderby('id','desc')->latest()->limit(15)->get();
        $employees_id = Attendants::pluck('employee_id');
        $employees = Employees::whereIn('id', $employees_id)->pluck('full_name', 'id');
        return view('attendants.index-attendants',['attendants'=>$attendants, 'employees' => $employees]);
    }
    //create
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('attendants.create',compact('employees'));
    }
    //store
    public function store(Request $request){
        $request->validate([
            'date'          => 'required',
            'hour'          => 'required',
            'late_time'     => 'required',
            'sign_in_time'  => 'required',
            'sign_out_time' => 'required',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        Attendants::create($request->all());
        $message = "attendant has been add successfully";
        return redirect()->route('attendants.index-attendants')->with('message',$message);
    }
    //edit
    public function edit($id){
        $attendant = Attendants::findOrFail($id);
        $employees = Employees::pluck('full_name','id');
        return view('attendants.edit',compact('attendant','employees'));
    }
    //update
    public function update(Request $request, $id){
        $attendant = Attendants::findOrFail($id);
        $request->validate([
            'date'          => 'required',
            'hour'          => 'required',
            'late_time'     => 'required',
            'sign_in_time'  => 'required',
            'sign_out_time' => 'required',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $attendant->update($request->all());
        $message = "attendante has been update successfully";
        return redirect()->route('attendants.index-attendants')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $attendant = Attendants::findOrFail($id);
        $attendant->delete();
        $message = "attendant has been removed successfully";
        return redirect()->route('attendants.index-attendants')->with('message',$message);
    }
}
