<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Employees;

class PaymentController extends Controller
{
    //index
    public function index(){
        $payments = Payment::orderby('id','desc')->latest()->limit(15)->get();
        $employees_id = Payment::pluck('employee_id');
        $employees = Employees::whereIn('id', $employees_id)->pluck('full_name', 'id');
        return view('payments.index',['payments'=>$payments, 'employees' => $employees]);
    }
    //show
    public function show($id){
        $payment = Payment::find($id);
        return view('payments.show')->with('payment',$payment);
    }
    //create
    public function create(){
        $employees = Employees::pluck('full_name','id');
        return view('payments.create',compact('employees'));
    }
    //store
    public function store(Request $request){
        $request->validate([
            'hour'           => 'required',
            'late_time'      => 'required',
            'main_salary'    => 'required',
            'ot_hour'        => 'required',
            'ot_salary'      => 'required',
            'date_pay'       => 'required',
            'pat_method'     => 'required|string|max:50',
            'note'           => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        Payment::create($request->all());
        $message = "payment has been paied successfully";
        return redirect()->route('payments.index')->with('message',$message);
    }
    //edit
    public function edit($id){
        $payment      = Payment::findOrFail($id);
        $employees    = Employees::pluck('full_name','id');
        return view('payments.edit',compact('payment','employees'));
    }
    //update
    public function update(Request $request, $id){
        $payment = Payment::findOrFail($id);
        $request->validate([
            'hour'           => 'required',
            'late_time'      => 'required',
            'main_salary'    => 'required',
            'ot_hour'        => 'required',
            'ot_salary'      => 'required',
            'date_pay'       => 'required',
            'pat_method'     => 'required|string|max:50',
            'note'           => 'required|string|max:250',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $payment->update($request->all());
        $message = "payment has been update successfully";
        return redirect()->route('payments.index')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $payment = Payment::findOrFail($id);
        $payment->delete();
        $message = "payment has been removed successfully";
        return redirect()->route('payments.index')->with('message',$message);
    }
}
