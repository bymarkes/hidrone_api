<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineFlight extends Model
{
    protected $fillable = ['id', 'Lat', 'Lon', 'username','created_at','updated_at','drone'];
}
