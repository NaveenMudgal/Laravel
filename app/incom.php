<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incom extends Model
{
    protected $primaryKey = 'name';
    protected $table = 'income';
   protected $fillable = ['name',];
}
