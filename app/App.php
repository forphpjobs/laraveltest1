<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'name',
        'text',
        'opisanie',
        'img',
        'link',
    ];
    public $timestamps=false;
}
