<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbStu extends Model
{
    //
    protected $table="tb_stuinf";
    public $timestamps = false;
    protected $primaryKey = 'xh';
    public $incrementing = false;
    protected $keyType = 'string';
    
}