<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Student extends Model
{
    use HasRoles;  


    protected $fillable = [
        'roll_no',
        'name',
        'email',
        'department',
        'ph_no',
        'mentor',
        'mentor_no',
    ];
}
