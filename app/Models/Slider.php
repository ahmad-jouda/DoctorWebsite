<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'image' , 
    ];
    public function getImageUrlAttribute()
    {
        if($this->image)
        {
            return asset('storage/'.$this->image);
        }
            return asset('images/defult.png');
    }
}
