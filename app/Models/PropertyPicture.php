<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPicture extends Model
{
    protected $fillable = ['picture_name','picture_url','property_id'];
}
