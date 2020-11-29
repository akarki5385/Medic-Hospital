<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'department',
        'date',
        'time',
        'message',
        'user_id',

    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }


}
