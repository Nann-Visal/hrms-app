<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone_number',
        'date_of_birth',
        'email',
        'address',
        'bank_account',
        'start_date',
        'salary',
        'position',
        'cv',
        'profile'
    ];
    //relationship -> attendants
    public function attendant(){
        return $this->belongsTo(Attendants::class);
    }
    //relationship -> task
    public function  task(){
        return $this->belongsTo(Task::class);
    }
    //relationship -> take-leave
    public function  takeLeave(){
        return $this->belongsTo(TakeLeave::class);
    }
    //relationship -> pending-leave
    public function  pendingLeave(){
        return $this->belongsTo(PendingLeave::class);
    }
    //relationship -> event
    public function  event(){
        return $this->belongsTo(Event::class);
    }
    //relationship -> payment
    public function  payment(){
        return $this->belongsTo(Payment::class);
    }
    //relationship -> over-time
    public function  overTime(){
        return $this->belongsTo(OverTime::class);
    }
}
