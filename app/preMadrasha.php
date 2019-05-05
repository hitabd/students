<?php

namespace App;

use App\Student;

use Illuminate\Database\Eloquent\Model;

class preMadrasha extends Model
{
    protected $table = 'pre_madrashas';

    protected $fillable = [];

    public function schools(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}
