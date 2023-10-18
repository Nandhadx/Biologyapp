<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFiles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'resources';
    protected $primaryKey = 'ResourceID';
    protected $fillable = [
        'CourseID',
        'ResourceType',
        'ResourceFile',
        'FileName',
        'UploadDate',
    ];
}
