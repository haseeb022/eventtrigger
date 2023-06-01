<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;

    protected $table = 'attendees';

    protected $fillable = [
        'organization_id',
        'event_id',
        'user_id',
        'reserve_seats'
    ];
}
