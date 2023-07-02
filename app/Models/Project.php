<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'project_name',
        'project_status',
        'start_date',
        'end_date',
        'describtions',
        'employee_id'
    ];
    //relationship -> employee
    public function employees(){
        return $this->hasMany(Employees::class);
    }
    //relationship -> task
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
