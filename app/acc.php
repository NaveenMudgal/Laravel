<?php

namespace App;
use App\acc;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class acc extends Model
{
	 protected $fillable = [
        'name', 'wallet', 'bank','card'.'savings'
    ];
    // protected $table = 'wallet';

    // public $timestamps = false;
}
