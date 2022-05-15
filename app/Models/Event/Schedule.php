<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function modalities()
    {
        return $this->belongsTo(Modality::class);
    }
}
