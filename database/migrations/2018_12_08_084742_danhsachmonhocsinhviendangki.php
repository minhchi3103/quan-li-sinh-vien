<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Danhsachmonhocsinhviendangki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhsachmonhocsinhviendangki', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idlophoc',false, true);
            $table->string('masosinhvien', 30);
            $table->string('mahocki', 30);
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
        Schema::dropIfExists('danhsachmonhocsinhviendangki');
    }
}
