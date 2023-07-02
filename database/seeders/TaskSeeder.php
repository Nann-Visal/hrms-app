<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize employees
        $tasks = [];
        foreach(range(1,30) as $index){
            $task = [
                'task_name' => "Task Name ".$index,
                'task_status' => "Task Status ".$index,
                'start_date' => now(),
                'end_date' => now(),
                'describtions' => "Describtion ".$index,
                'project_id' => random_int(1,50),
                'employee_id'=> random_int(1,50)
            ];
            $tasks[] = $task;
        }
        DB::table('tasks')->insert($tasks);
    }
}