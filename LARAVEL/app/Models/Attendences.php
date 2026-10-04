<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('employee_id','attendance_date','check_in','check_out','working_hours','status','created_by')]
class Attendences extends Model
{
  // Points to the user who created this attendance record
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Points to the employee this attendance record belongs to
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
}
