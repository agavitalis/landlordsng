<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $fillable =["type_name"];

    public function property()
    {
        return $this->hasMany('App\Property');
    }
}
