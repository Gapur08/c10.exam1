<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function rest()
    {
        return $this->belongsTo(Restaurant::class);
    }
    //
}
