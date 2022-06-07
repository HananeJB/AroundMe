<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'discoveries_id',

    ];

    public function discovery() {
        return $this->belongsTo(Discovery::class);

    }
}
