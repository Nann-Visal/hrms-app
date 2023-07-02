<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'hour',
        'sign_in_time',
        'sign_out_time',
        'salary_per_hour',
        'note',
        'employee_id'
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
