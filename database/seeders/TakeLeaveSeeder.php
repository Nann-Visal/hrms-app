<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TakeLeave;

class TakeLeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $takeleaves = [];
        foreach(range(1,25) as $index){
            $takeleave = [
                'start_date' => now(),
                'duration'   => random_int(1,7),
                'reason'     => "Reason ".$index,
                'employee_id'=> random_int(1,50),
            ];
            $takeleaves[] = $takeleave;
        }
        DB::table('take_leaves')->insert($takeleaves);
    }
}
