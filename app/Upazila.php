<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $table = 'upazilas';

    protected $fillable = [
        'name', 'description', 'district_id'
    ];

    public function districts()
    {
        return $this->belongsTo(District::Class, 'district_id');
    }
}
