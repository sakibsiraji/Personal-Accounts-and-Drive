<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
