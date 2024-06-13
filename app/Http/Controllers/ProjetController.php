<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjetController extends Controller
{
    //index
    public function index(){
        $projects = Project::orderby('id','desc')->latest()->limit(15)->get();
        return view('projects.index-project',['projects'=> $projects]);
    }
    //show
    public function show($id){
        $project = Project::find($id);
        return view('projects.show')->with('project',$project);
    }
    //create
    public function create(){
        return view('projects.create');
    }
    //store
    public function store(Request $request){
        $request->validate([
            'project_name'   => 'required|string|max:50',
            'project_status' => 'required|string|max:15',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'describtions'   => 'required|string|max:250',
        ]);
        Project::create($request->all());
        $message = "project has been add successfully";
        return redirect()->route('projects.index-project')->with('message',$message);
    }
    //edit
    public function edit($id){
        $project = Project::findOrFail($id);
        return view('projects.edit',compact('project'));
    }
    //update
    public function update(Request $request, $id){
        $project = Project::findOrFail($id);
        $request->validate([
            'project_name'   => 'required|string|max:50',
            'project_status' => 'required|string|max:15',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'describtions'   => 'required|string|max:250',
        ]);
        $project->update($request->all());
        $message = "project has been update successfully";
        return redirect()->route('projects.index-project')->with('message',$message);
    }
    //destroy
    public function destroy($id){
        $project = Project::findOrFail($id);
        $project->delete();
        $message = "project has been removed successfully";
        return redirect()->route('projects.index-project')->with('message',$message);
    }
}
