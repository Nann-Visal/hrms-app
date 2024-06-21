<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Employees;

class EmployeeController extends Controller
{
    //index
    public function index(Request $request){
        $employees = Employees::when(isset($request->full_name), function ($query) use ($request) {
            $query->where('full_name', 'LIKE', '%'.$request->full_name.'%');
        }
        )->orderby('id','desc')->latest()->limit(15)->get();
        return view('employees.index-employees',['employees'=> $employees]);
    }
    //create
    public function create(){
        return view('employees.create');
    }
    //show
    public function show($id){
        $employee = Employees::find($id);
        return view('employees.show')->with('employee',$employee);
    }
    //store 
    public function store(Request $request){
        $request->validate([
            'full_name'     => 'required|string|max:70',
            'phone_number'  => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'email'         => 'required|email',
            'address'       => 'required|string|max:200',
            'bank_account'  => 'required',
            'start_date'    => 'required|date',
            'salary'        => 'required',
            'position'      => 'required|string|max:50',
            'cv'            => 'required|mimes:pdf|max:2048',
            'profile'       => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);

        $requestData = $request->all();
        $fileName_CV = time().$request->file('cv')->getClientOriginalName();
        $fileName_Pr = time().$request->file('profile')->getClientOriginalName();
        $pathcv        = $request->file('cv')->storeAs('pdf',$fileName_CV,'public');
        $pathpr        = $request->file('profile')->storeAs('images',$fileName_Pr,'public');
        $requestData["cv"] = '/storage/'.$pathcv;
        $requestData["profile"] = '/storage/'.$pathpr;

        Employees::create($requestData);
        $message = "employee has been add successfully";
        return redirect()->route('employees.index-employees')->with('message',$message);
    }
    //edit
    public function edit($id){
        $employee = Employees::findOrFail($id);
        return view('employees.edit',compact('employee'));
    }
    //update
    public function update(Request $request, $id){
        $employee = Employees::findOrFail($id);
        $request->validate([
            'full_name'     => 'required|string|max:70',
            'phone_number'  => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'email'         => 'required|email',
            'address'       => 'required|string|max:200',
            'bank_account'  => 'required',
            'start_date'    => 'required|date',
            'salary'        => 'required',
            'position'      => 'required|string|max:50',
            'cv'            => 'required|mimes:pdf|max:2048',
            'profile'       => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);

        $requestData = $request->all();
        $fileName_CV = time().$request->file('cv')->getClientOriginalName();
        $fileName_Pr = time().$request->file('profile')->getClientOriginalName();
        $pathcv        = $request->file('cv')->storeAs('pdf',$fileName_CV,'public');
        $pathpr        = $request->file('profile')->storeAs('images',$fileName_Pr,'public');
        $requestData["cv"] = '/storage/'.$pathcv;
        $requestData["profile"] = '/storage/'.$pathpr;

        $employee->update($requestData);
        $message = "employee has been edit successfully";
        return redirect()->route('employees.index-employees')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $employee = Employees::findOrFail($id);
        $employee->delete();
        $message = "remove has been removed successfully";
        return redirect()->route('employees.index-employees')->with('message',$message);
    }
}
