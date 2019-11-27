<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'pseudo', 'genre', 'description', 'id', 'user_id', 'created_at','updated_at'
    ];
}
