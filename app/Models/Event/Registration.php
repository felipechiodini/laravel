<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function kits()
    {
        return $this->hasManyThrough(Kit::class, RegistrationKit::class);
    }
}
