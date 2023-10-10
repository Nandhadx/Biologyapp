<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructorcourse extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'InstructorCourseID';
    protected $fillable = [
        'InstructorID',
        'CourseID',
    ];
    public function getKeyName()
    {
        return 'InstructorCourseID';
    }
}
