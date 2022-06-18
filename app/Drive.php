<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    //use HasFactory;
    protected $table = 'records';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
