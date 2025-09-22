<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['event_id','student_id','registered_on','status'];
    public $timestamps = false;
}
