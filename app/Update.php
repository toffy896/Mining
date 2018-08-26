<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $fillable = [

        'mine',
        'reg',
        's1milled',
        's2milled',
        'bfine',
        'percent',
        'bgross',
        'receipt',
        'agency',
        'status',
        'amount',
        'goldsold',
        'comment',

    ];
}
