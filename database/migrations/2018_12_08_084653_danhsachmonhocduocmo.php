<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Danhsachmonhocduocmo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhsachmonhocduocmo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahocki', 30);
            $table->string('mahocphan', 30);
            $table->string('malophoc', 10);
            $table->string('masogvphutrach', 30);
            $table->string('lichhoc');
            $table->integer('tietbatdau',false,true);
            $table->integer('sotiet',false,true);
            $table->integer('soluongsinhvien',false, true);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhsachmonhocduocmo');
    }
}
