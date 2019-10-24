<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'taikhoan';
    public $timestamps = false;
    protected $fillable = [
        'maso', 'matkhau', 'quyenhan',
    ];

    protected $hidden = [
        'matkhau',
    ];
}
