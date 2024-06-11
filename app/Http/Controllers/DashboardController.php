<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\TakeLeave;
use App\Models\PendingLeave;
use App\Models\Employees;

class DashboardController extends Controller
{
    //index
    public function index(){

        $project_failed    = Project::where('project_status','Failed')->count();
        $project_running   = Project::where('project_status','Running')->count();
        $project_completed = Project::where('project_status','Completed')->count();
        $project           = Project::count();
        $project_runnings  = Project::where('project_status','Running')->get();
        $pending_leave     = PendingLeave::count();
        $take_leave        = TakeLeave::count();
        $employees         = Employees::count();
        $former_employees  = PendingLeave::where('duration',0)->count();

        return view('dashboards.index',[

            'project_failed'    => $project_failed,
            'project_runnings'  => $project_runnings,
            'project_running'   => $project_running,
            'project_completed' => $project_completed,
            'project'           => $project,
            'pending_leave'     => $pending_leave,
            'take_leave'        => $take_leave,
            'employees'         => $employees,
            'former_employees'  => $former_employees,
        ]);
    }
}
