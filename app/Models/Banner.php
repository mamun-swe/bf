<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['banner_title', 'banner_description', 'banner_image'];
}
