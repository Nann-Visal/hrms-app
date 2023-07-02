<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Overtime;
use Carbon\Carbon;

class OverTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize overtime
        $time = Carbon::now()->hour . ':' . Carbon::now()->minute;
        $overtimes = [];
        foreach(range(1,15) as $index){
            $overtime = [
                'date'           => now(),
                'hour'           => floatval(2.3),
                'sign_in_time'   => $time,
                'sign_out_time'  => $time,
                'salary_per_hour'=> random_int(3,7),
                'note'           => "Note ".$index,
                'employee_id'    => random_int(1,50)
            ];
            $overtimes[] = $overtime;
        }
        DB::table('over_times')->insert($overtimes);
    }
}
