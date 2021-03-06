<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected  $table = 'levels';
    protected $fillable = [
        'name','setactive','order','stage','fee'
    ];
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}
