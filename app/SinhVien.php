<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';
    public $timestamps = false;
    protected $fillable = [
        'maso','hoten','hedaotao','gioitinh','diachi','sodienthoai','email'
    ];
}
