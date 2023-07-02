<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PendingLeave;

class PendingLeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pendingleaves = [];
        foreach(range(1,50) as $index){
            $pendingleave = [
                'start_date' => now(),
                'duration'   => random_int(1,7),
                'reason'     => "Reason ".$index,
                'employee_id'=> random_int(1,50),
                'position'   => "Position ".$index
            ];
            $pendingleaves[] = $pendingleave;
        }
        DB::table('pending_leaves')->insert($pendingleaves);
    }
}
