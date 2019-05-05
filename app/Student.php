<?php

namespace App;
use App\preMadrasha;
use App\Official;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [];

    public function madrashas(){
        return $this->hasMany(preMadrasha::class, 'student_id');
    }

    public function officials(){
        return $this->hasMany(Official::class, 'student_id');
    }
}
