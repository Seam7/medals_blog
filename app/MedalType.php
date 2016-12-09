<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedalType extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
}
