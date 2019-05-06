<?php

namespace App;

use App\Student;

use Illuminate\Database\Eloquent\Model;

class preMadrasha extends Model
{
    protected $table = 'pre_madrashas';

    protected $fillable = ['exam_class_name', 'institute_name', 'result', 'pass_year', 'board', 'document_no', 'addmission_class', 'student_id'];

    public function schools(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
