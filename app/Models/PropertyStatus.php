<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    
    protected $fillable= ['property_status_name','property_status_picture'];

    public function property()
    {
        return $this->hasMany('App\Models\Property');
    }

}
