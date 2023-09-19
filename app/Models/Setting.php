<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'thanks_header',
        'tabs_txt',
        'first_tab',
        'four_star_page',
        'five_star_page',
        'review',
        'thanks_page',
        'bg_img'
    ];



    public function setTabsTxtAttribute($value)
    {
        $this->attributes['tabs_txt'] = json_encode($value);
    }

    public function setFirstTabAttribute($value)
    {
        $this->attributes['first_tab'] = json_encode($value);
    }

    public function setFourStarPageAttribute($value)
    {
        $this->attributes['four_star_page'] = json_encode($value);
    }

    public function setFiveStarPageAttribute($value)
    {
        $this->attributes['five_star_page'] = json_encode($value);
    }

    public function setReviewAttribute($value)
    {
        $this->attributes['review'] = json_encode($value);
    }

    public function setThanksPageAttribute($value)
    {
        $this->attributes['thanks_page'] = json_encode($value);
    }

    public function getTabsTxtAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getFirstTabAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getFourStarPageAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getFiveStarPageAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getReviewAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getThanksPageAttribute($value)
    {
        return json_decode($value, true);
    }

    public function images()
    {
        return $this->morphMany(Media::class, 'imageable');
    }
}
