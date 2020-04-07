<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $fillable =['property_type_name','property_type_picture','property_type_picture_url'];

    public function property()
    {
        return $this->hasMany('App\Models\Property');
    }
}
