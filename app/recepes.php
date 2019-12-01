<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recepes extends Model
{
    protected $fillable = [
        'id',
        'title',
        'time_prep',
        'recepe',
    ];
}
