<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    protected  $table = 'user_history';
    protected $fillable = [
        'user_id', 'data',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
