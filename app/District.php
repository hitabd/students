<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        'name', 'description', 'division_id'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::Class, 'division_id');
    }

    public function upazilas()
    {
        return $this->hasMany(Upazila::Class, 'district_id');
    }
}
