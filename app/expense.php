<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    protected $primaryKey = 'name';
    protected $table = 'expenses';
   	protected $fillable = ['name',];
}
