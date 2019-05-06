<?php

namespace App;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $table = 'officials';

    protected $fillable = ['addmission_no', 'date', 'addmitted_to_class', 'roll_no', 'student_id'];

    public function schools(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
