<?php

namespace laramovie;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['genre_id','title','image','created_at_ip', 'updated_at_ip'];
}
