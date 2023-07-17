<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'company', 'application_status', 'description', 'deadline', 'contact_email',
    ];

    public function checklists()
    {
        return $this->hasMany(Checklist::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function calendarEvents()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}
