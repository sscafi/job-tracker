<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = ['item', 'completed'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
