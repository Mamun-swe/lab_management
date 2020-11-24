<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignedCourses extends Model
{
    protected $fillable = ['teacher_id', 'course_id'];
}
