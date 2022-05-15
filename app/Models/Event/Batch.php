<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }

    public function kits($additional = 0)
    {
        return $this->belongsToMany(Kit::class, BatchKit::class)->where('is_additional', $additional)->get();
    }

    public function isSoldOut()
    {
        return Registration::where('batch_id', $this->id)->count() >= $this->limit_registrations;
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

}
