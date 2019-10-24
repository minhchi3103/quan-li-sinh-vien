<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giangvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giangvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maso', 30)->unique();
            $table->string('hoten')->nullable();
            $table->string('trinhdo')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('diachi')->nullable();
            $table->string('sodienthoai')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('giangvien');
    }
}
