<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'danhsachmonhocduocmo';
    public $timestamps = false;
    protected $fillable = [
        'mahocki','mahocphan', 'malophoc', 'masogvphutrach','lichhoc','tietbatdau','sotiet','soluongsinhvien',
    ];
}
