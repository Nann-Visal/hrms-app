<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //initialize employees
        $employees = [];
        foreach(range(1,50) as $index){
            $employee = [
                'full_name' => "Full Name ".$index,
                'phone_number' => "Phone Number ".$index,
                'date_of_birth'=> now(),
                'email' => "Email ".$index,
                'address'=> "Address ".$index,
                'bank_account' => "Bank Account ".$index,
                'start_date' => now(),
                'salary'=> 350,
                'position'=>"Position ".$index,
                'cv'=>"Profile ".$index,
                'profile'=>"Profile ".$index
            ];
            $employees[] = $employee;
        }
        DB::table('employees')->insert($employees);
    }
}
