<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendedEmails extends Model
{
    protected $fillable = ['id', 'email'];
}
