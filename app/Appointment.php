<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department',
        'phone_number',
        'date',
        'time',
        'message',
    ];
}
