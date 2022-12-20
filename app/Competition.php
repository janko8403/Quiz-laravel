<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = ['id_competition','nr_shop', 'country', 'name', 'email', 'link', 'image'];
}
