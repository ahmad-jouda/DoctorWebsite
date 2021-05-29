<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,'description', 'image' , 'address'];

        public function getImageUrlAttribute()
        {
            if($this->image)
            {
                return asset('storage/'.$this->image);
            }
                return asset('images/defult.png');
        }
}
