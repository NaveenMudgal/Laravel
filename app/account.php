<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{

	// protected $fillable = [
 //        'name',
 //    ];

    protected $primaryKey = 'name';
    protected $table = 'accounts';
   	protected $fillable = ['name',];
   // protected $fillable = array('wallet');
}
