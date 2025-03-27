<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    //protected $table = 'students';  // if u have to set name manuaaly 
    public $timestamps = false;

    protected $primaryKey = 'Id';
}
