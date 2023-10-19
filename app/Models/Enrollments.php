<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'payments';
    protected $primaryKey = 'PaymentID';
    protected $fillable = [

    ];
}
