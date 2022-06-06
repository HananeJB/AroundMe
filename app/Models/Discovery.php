<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,
        'content' ,
        'author',
        'tagline' ,
        'category' ,
        'city' ,
        'address' ,
        'latitude' ,
        'longitude' ,
        'cover',

    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
