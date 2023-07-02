<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Attendants;

class AttendantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attendants = [];
        $time = Carbon::now()->hour . ':' . Carbon::now()->minute;
        foreach(range(1,50) as $index){
            $attendant = [
                'date' => now(),
                'hour' => random_int(6,7),
                'sign_in_time' => $time,
                'sign_out_time'=> $time,
                'employee_id'=> random_int(1,50),
            ];
            $attendants[] = $attendant;
        }
        DB::table('attendants')->insert($attendants);
    }
}
