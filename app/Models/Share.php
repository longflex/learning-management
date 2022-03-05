<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'contentval','level', 'portfolio','brief_title','setactive','posted_at'
    ];
    //protected $guarded = [];
    public function categories()
    {
        return $this->hasMany(SharesCategories::class);
    }
}
