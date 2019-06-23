<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'student_id', 'uniqueid', 'score',
    ];
}
