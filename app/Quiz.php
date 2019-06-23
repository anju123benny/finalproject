<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'c_id','l_id', 'question', 'rad1', 'rad2','rad3','rad4','answer',
    ];
}
