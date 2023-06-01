<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'organization_id',
        'title',
        'description',
        'event_category',
        'is_fee',
        'fee',
        'meeting_id',
        'total_seats',
        'country',
        'city',
        'post_code',
        'date',
        'start_time',
        'end_time',
        'address'
    ];
}
