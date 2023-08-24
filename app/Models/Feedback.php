<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'order_id',
        'day_in_use',
        'rating',
        'comment'
    ];

    public function images(){
        return $this->hasMany(Media::class);
    }
}
