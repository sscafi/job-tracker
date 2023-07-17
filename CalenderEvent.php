<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $fillable = ['title', 'description', 'start_date', 'end_date'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
