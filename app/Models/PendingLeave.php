<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingLeave extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'duration',
        'position',
        'reason',
        'employee_id'
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
}
