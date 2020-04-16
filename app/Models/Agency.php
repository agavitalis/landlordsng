<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'agency_name', 'founder', 'email','phone', 'biography', 'address','profile_picture', 
        'instagram', 'twitter','facebook', 'linkedin','website','user_id'
    
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function agent_request()
    {
        return $this->hasMany('App\Models\AgentRequest');
    }

    public function agents()
    {
        return $this->hasMany('App\Models\Agent');
    }

    public function messages()
    {
        return $this->morphMany('App\Models\Message', 'messagetable');
    }
}
