<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize employees
        $projects = [];
        foreach(range(1,50) as $index){
            $project = [
                'project_name' => "Project Name ".$index,
                'project_status' => "Project Status ".$index,
                'start_date' => now(),
                'end_date' => now(),
                'describtions' => "Describtion ".$index,
            ];
            $projects[] = $project;
        }
        DB::table('projects')->insert($projects);
    }
}
