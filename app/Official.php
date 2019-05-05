<?php

namespace App;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $table = 'officials';

    protected $fillable = [];

    public function schools(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
