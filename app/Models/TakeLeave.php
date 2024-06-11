<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakeLeave extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'duration',
        'reason',
        'employee_id',
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
