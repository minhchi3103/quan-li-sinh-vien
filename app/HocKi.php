<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocKi extends Model
{
    protected $table = 'hocki';
    public $timestamps = false;
    protected $fillable = [
        'mahocki'
    ];
}
