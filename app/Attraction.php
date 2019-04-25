<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $table = 'attractions';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'logo', 'experience', 'min-height', 'description'];
}
