<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable =[
        'event_name',
        'date',
        'start_time',
        'end_time',
        'descibtion',
        'subject',
        'employee_id'
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
