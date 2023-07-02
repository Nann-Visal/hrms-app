<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'hour',
        'late_time',
        'main_salary',
        'ot_hour',
        'ot_salary',
        'date_pay',
        'pat_method',
        'note',
        'employee_id'
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
