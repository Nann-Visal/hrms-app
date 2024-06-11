<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MOdels\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize event
        $time = Carbon::now()->hour . ':' . Carbon::now()->minute;
        $events = [];
        foreach(range(1,15) as $index){
            $event = [
                'event_name' => "Event Name ".$index,
                'date'       => now(),
                'start_time' => $time,
                'end_time'   => $time,
                'descibtion' => "Describtion ".$index,
                'subject'    => "Subject ".$index,
                'employee_id'=> random_int(1,50)
            ];
            $events[] = $event;
        }
        DB::table('events')->insert($events);
    }
}
