<?php

namespace App\Model\Patient;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['user_id','phone','address'];
}
