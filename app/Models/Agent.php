<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'agent_name', 'email','phone', 'biography', 'address','profile_picture', 
        'instagram', 'twitter','facebook','linkedin','website','user_id','agency_id','status',
    
    ];

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency','agency_id');
    }
   
    public function property()
    {
        return $this->hasMany('App\Models\Property');
    }

    public function messages()
    {
        return $this->morphMany('App\Models\Message', 'messagetable');
    }

}
