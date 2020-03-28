<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAttribute extends Model
{
    protected $fillable = ['attribute_name','attribute_value','property_id'];
}
