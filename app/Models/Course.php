<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contentval','level', 'portfolio','brief_title','setactive','posted_at'
    ];
    //protected $guarded = [];
    public function categories()
    {
        return $this->hasMany(CoursesCategories::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
