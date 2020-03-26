<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    
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
