<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admin', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');

            $table->string('name')
                ->unique()
                ->comment('用户名');

            $table->string('nick_name')
                ->nullable()
                ->comment('昵称');
            $table->string('avatar')
                ->nullable()
                ->comment('用户头像');

            $table->string('true_name')
                ->index()
                ->nullable()
                ->comment('真实姓名');

            $table->char('phone', 11)
                ->nullable()
                ->unique()
                ->comment('手机号');

            $table->string('password');

            $table->rememberToken()->index();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('admin');
    }
}
