<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'agent_name', 'email','phone', 'biography', 'address','profile_picture', 
        'instagram', 'twitter','facebook','linkedin','website','user_id','agency_id','status',
    
    ];

    public function property()
    {
        return $this->hasMany('App\Models\Property');
    }
}
