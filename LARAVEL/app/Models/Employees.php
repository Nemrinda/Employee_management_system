<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('department_id','employee_code','first_name','gender','phone','email','image','address','hire_date','salary','status','created_by')]
class Employees extends Model
{// Belongs to a department via department_id
    public function department()
    {
        return $this->belongsTo(Departments::class, 'department_id');
    }

    // Has many attendance records via employee_id
    public function attendances()
    {
        return $this->hasMany(Attendences::class, 'employee_id');
    }

    // Belongs to the user who created this record via created_by
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
