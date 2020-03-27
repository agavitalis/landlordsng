<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgencyRequest extends Model
{
    protected $fillable = [
        'agency_name', 'founder','email', 'phone','biography','profile_picture','status','user_id'
    ];
}