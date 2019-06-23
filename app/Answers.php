<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = [
        'id', 'question', 'given_answer','true_answer',
    ];
}
