<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('name','description')]
class Departments extends Model
{
    public function employees(){
        return $this->hasMany(Employees::class,'department_id');
    }
}
