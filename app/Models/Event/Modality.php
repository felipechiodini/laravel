<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    protected $fillable = ['category_id', 'name'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function currentBatch()
    {
        return $this->hasMany(Batch::class)->get()->filter(function($batch) {
            return !$batch->isSoldOut();
        })->first();
    }
}
