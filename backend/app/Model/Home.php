<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'title', 'note', 'latitude', 'longitude'
    ];
}
