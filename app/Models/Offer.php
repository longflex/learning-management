<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contentval','level_id', 'portfolio','brief_title','setactive','posted_at','mainlink'
    ];
    //protected $guarded = [];
    public function categories()
    {
        return $this->hasMany(OffersCategories::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
