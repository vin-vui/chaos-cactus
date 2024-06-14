<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = ['title', 'youtube_link']; // Specifica i campi che possono essere assegnati di massa


}

