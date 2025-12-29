<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /**
     * Allows mass assignment for these fields.
     * This is important when receiving data from forms or API requests.
     */
    protected $fillable = [
        'name',
        'artist_name',
        'fee',
        'event_date',
        'address',
    ];
}
