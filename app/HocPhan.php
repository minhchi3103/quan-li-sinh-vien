<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    protected $table = 'hocphan';
    public $timestamps = false;
    protected $fillable = [
        'mahocphan', 'tenhocphan', 'sotiet'
    ];
}
