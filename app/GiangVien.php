<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    protected $table = 'giangvien';
    public $timestamps = false;
    protected $fillable = [
        'maso','hoten','trinhdo','gioitinh','diachi','sodienthoai','email'
    ];
}
