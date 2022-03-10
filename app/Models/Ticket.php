<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected  $table = 'tickets';
    protected $fillable = [
        'request', 'receiver', 'level_id',
    ];
    public function request_user()
    {
        return $this->belongsTo(User::class,'request');
    }
    public function receiver_user()
    {
        return $this->belongsTo(User::class,'receiver');
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
