<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MOdels\Payment;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize payment
        $time = Carbon::now()->hour . ':' . Carbon::now()->minute;
        $payments = [];
        foreach(range(1,15) as $index){
            $payment = [
                'hour'       => floatval(200.0),
                'late_time'  => floatval(30.30),
                'main_salary'=> random_int(250,900),
                'ot_hour'    => floatval(100.0),
                'ot_salary'  => random_int(100,200),
                'date_pay'   => now(),
                'pat_method' => "000 555 00".$index,
                'note'       => "Note ".$index,
                'employee_id'=> random_int(1,50)
            ];
            $payments[] = $payment;
        }
        DB::table('payments')->insert($payments);
    }
}
