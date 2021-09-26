<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = [
         'name',
         'email',
         'country',
         'specialty',
         'date',
         'category',
     ];
}
