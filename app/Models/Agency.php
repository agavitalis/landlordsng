<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'agency_name', 'founder', 'email','phone', 'biography', 'address','profile_picture', 
        'instagram', 'twitter','facebook', 'linkedin','website','user_id'
    
    ];
}
