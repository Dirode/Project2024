<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'date',
        'hall_id', // Add the hall_id field to the $fillable array
        'hall',
        'start_time',
        'end_time',
        'reason',
        'status',
        'user_id',
    ];

    use Notifiable;

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'hall_id');
    }
    
    use Notifiable;

}

