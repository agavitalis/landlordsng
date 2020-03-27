<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'location','state','country','property_status_id', 'property_type_id', 'price','old_price', 
        'cover_picture_name', 'property_description','property_video','agent_id'
    ];

    public function agent()
    {
        return $this->belongsTo('App\Models\Agent','agent_id');
    }
    
    public function property_status()
    {
        return $this->belongsTo('App\Models\PropertyStatus','property_status_id');
    }

    public function property_type()
    {
        return $this->belongsTo('App\Models\PropertyStatus','property_type_id');
    }

    public function property_picture()
    {
        return $this->hasMany('App\Models\PropertyPicture');
    }

    public function property_attribute()
    {
        return $this->hasMany('App\Models\PropertyAttribute');
    }
}
