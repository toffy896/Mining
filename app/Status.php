<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuss';
    protected $fillable = [

        'mine',
        's1milled',
        's2milled',
        'bfine',
        'percent',
        'bgross',
        'status',
        'comment',

    ];
}
