<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'CourseID';
    protected $fillable = [
        'CourseName',
        'Description',
        'StartDate',
        'EndDate',
        'Price',
        'Level',
        'Category',
        'IsActive',
    ];
}
