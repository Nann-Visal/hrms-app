<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\Employees;

class TaskController extends Controller
{
    //index
    public function index(){
        $tasks = Task::orderby('id','desc')->get();
        return view('tasks.index-task',['tasks' => $tasks]);
    }
    //create
    public function create(){
        $projects = Project::pluck('project_name','id');
        $employees = Employees::pluck('full_name','id');
        return view('tasks.create',compact('projects','employees'));
    }
    //show
    public function show($id){
        $task = Task::find($id);
        return view('tasks.show')->with('task',$task);
    }
    //store
    public function store(Request $request){
        $request->validate([
            'task_name'      => 'required|string|max:50',
            'task_status'    => 'required|string|max:15',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'describtions'   => 'required|string|max:250',
            'project_id'     => 'required|exists:projects,id',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        Task::create($request->all());
        $message = "task has been add successfully";
        return redirect()->route('tasks.index-task')->with('message',$message);
    }
    //edit
    public function edit($id){
        $projects = Project::pluck('project_name','id');
        $employees = Employees::pluck('full_name','id');
        $task = Task::findOrFail($id);
        return view('tasks.edit',compact('task','projects','employees'));
    }
    //update
    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $request->validate([
            'task_name'      => 'required|string|max:50',
            'task_status'    => 'required|string|max:15',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'describtions'   => 'required|string|max:250',
            'project_id'     => 'required|exists:projects,id',
            'employee_id'    => 'required|exists:employees,id',
        ]);
        $task->update($request->all());
        $message = "task has been update successfully";
        return redirect()->route('tasks.index-task')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        $message = "task has been removed successfully";
        return redirect()->route('tasks.index-task')->with('message',$message);
    }
}
