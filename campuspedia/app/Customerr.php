<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerr extends Model
{
	protected $table = 'customerr';
    protected $fillable = ['name', 'email', 'occupation'];
}
