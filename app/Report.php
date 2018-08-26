<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [

        'mine',
        'name',
        'start_date',
        'end_date',
        'author',
        'content',
        'type',


    ];

}
