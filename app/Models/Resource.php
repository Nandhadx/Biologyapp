<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'resources';
    protected $primaryKey = 'ResourceID';
    protected $fillable = [

    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
