<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'InstructorID';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Biography',
        'ProfileImageURL',
        'JoinDate',
        'IsActive',
    ];
    public function getKeyName()
    {
        return 'InstructorID';
    }
}
