<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinfos extends Model
{
    protected $fillable = [
        'Course', 'question_lenth','uniqueid','time',
    ];
}
