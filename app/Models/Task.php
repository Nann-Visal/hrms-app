<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_name',
        'task_status',
        'start_date',
        'end_date',
        'describtions',
        'employee_id',
        'project_id',
    ];
    //relationship -> employee
    public function employee(){
        return $this->belongsTo(Employees::class);
    }
    //relationship -> project
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
