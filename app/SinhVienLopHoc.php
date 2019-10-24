<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVienLopHoc extends Model
{
    protected $table = 'danhsachmonhocsinhviendangki';
    public $timestamps = false;
    protected $fillable = [
        'idlophoc','masosinhvien', 'mahocki'
    ];
    public function lophoc()
    {
        return $this->hasOne('App\LopHoc', 'id', 'idlophoc');
    }
}
