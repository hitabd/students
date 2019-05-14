<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class StudentClass extends Model
{
    protected $table = 'classes';

    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_student', 'class_id', 'student_id')->withPivot('roll');
    }
}
