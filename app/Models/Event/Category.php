<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['event_id', 'name'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function modalities()
    {
        return $this->hasMany(Modality::class);
    }
}
