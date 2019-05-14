<?php

namespace App;

use App\preMadrasha;
use App\Official;
use App\StudentClass;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['residensial', 'image', 'name_bn', 'name_en', 'f_name_bn', 'f_name_en', 'f_occupation', 'f_income', 'm_name_bn', 'm_name_en', 'm_occupation', 'm_income', 'p_village', 'p_house', 'p_post', 'p_thana', 'p_district', 'per_village', 'per_house', 'per_post', 'per_thana', 'per_district', 'dob', 'b_group', 'height', 'weight', 'skin_color', 'b_sign', 'lg_name', 'lg_village', 'lg_house', 'lg_post', 'lg_thana', 'lg_district', 'relationship', 'phone',];

    public function madrashas()
    {
        return $this->hasMany(preMadrasha::class, 'student_id');
    }

    public function officials()
    {
        return $this->hasMany(Official::class, 'student_id');
    }
    public function classes()
    {
        return $this->belongsToMany(StudentClass::class, 'class_student', 'class_id', 'student_id')->withPivot('roll');
    }
}
