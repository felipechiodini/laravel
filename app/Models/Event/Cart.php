<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function deliveryType()
    {
        return $this->belongsTo(DeliveryType::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
