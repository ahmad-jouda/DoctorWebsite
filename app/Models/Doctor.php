<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,'description', 'image'];

    public function getImageUrlAttribute()
    {
        if($this->image)
        {
            return asset('storage/'.$this->image);
        }
            return asset('images/defult.png');
    }
}
