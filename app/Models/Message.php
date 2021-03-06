<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

  protected $guarded =[];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function messagetable()
    {
        return $this->morphTo();
    }

}
