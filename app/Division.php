<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'divisions';

    protected $fillable = [
        'name', 'description'
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'division_id');
    }

}
