<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'feedback_id',
        'image',
    ];


    public function imageable()
    {
        return $this->morphTo();
    }
}
