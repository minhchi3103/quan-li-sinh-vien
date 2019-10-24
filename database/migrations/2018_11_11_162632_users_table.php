<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maso', 30)->unique();
            $table->string('matkhau');
            $table->string('quyenhan', 2);
            $table->timestamp('created_at')->nullable();
        });
        $u = User::create(['maso'=>'admin','matkhau'=>'123456','quyenhan'=>'ql']);
        // $u = User::create(['maso'=>'sv001','matkhau'=>'123456','quyenhan'=>'sv']);
        // $u = User::create(['maso'=>'sv002','matkhau'=>'123456','quyenhan'=>'sv']);
        // $u = User::create(['maso'=>'sv003','matkhau'=>'123456','quyenhan'=>'sv']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoan');
    }
}
