<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'address' , 'phone' , 'first_time' , 'last_time', 'email' , 'postal_code' , 'logo','background'];

    public function getLogoUrlAttribute()
    {
        if($this->logo)
        {
            return asset('storage/'.$this->logo);
        }
            return asset('images/defult.png');
    }
    
    public function getBackgroundUrlAttribute()
    {
        if($this->background)
        {
            return asset('storage/'.$this->background);
        }
            return asset('images/defult.png');
    }
}
