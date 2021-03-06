<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    public function user()
    {
        return $this->belongsTo('User', 'id');
    }
}
