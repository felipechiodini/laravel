<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_type_id', 'name'];

    public function eventTypes()
    {
        return $this->belongsTo(EventType::class);
    }

    public function deliveryTypes()
    {
        return $this->belongsToMany(DeliveryType::class, EventDeliveryType::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
