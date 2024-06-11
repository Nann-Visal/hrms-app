<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendants extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'hour',
        'sign_in_time',
        'sign_out_time',
        'late_time',
        'employee_id',
    ];

    //relationship attendant -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
