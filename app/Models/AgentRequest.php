<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentRequest extends Model
{
    protected $fillable = [
        'name', 'email','phone', 'message','user_id','agency_id','status',
    ];
}
