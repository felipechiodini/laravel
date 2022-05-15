<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    
    public function sizeQuantities()
    {
        return $this->hasManyThrough(BatchKitSizeQuantity::class, BatchKit::class);
    }

    public function scopeAdditional($query)
    {
        return $query->where('is_additional', 1);
    }
}
