<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miner extends Model
{
    protected $fillable = [
              'fileno', 'mine','reg', 'owner','contact', 'number','email', 'location','province', 'district','type', 'output'
    ];
}
