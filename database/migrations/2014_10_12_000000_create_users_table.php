<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

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

            $table->string('id_card_number', 50)
                ->nullable()
                ->commebt('身份证号');

            $table->string('id_card_a')
                ->nullable()
                ->comment('身份证正面');

            $table->string('id_card_b')
                ->nullable()
                ->comment('身份证反面');

            $table->string('student_card_a')
                ->nullable()
                ->comment('学生证正面');

            $table->string('student_card_b')
                ->nullable()
                ->comment('学生证反面');

            $table->string('student_number')
                ->nullable()
                ->comment('学生证号');

            $table->char('phone', 11)
                ->nullable()
                ->unique()
                ->comment('手机号');

            $table->string('password');

            $table->unsignedTinyInteger('gender')
                ->default(3)
                ->comment('性别：1：男；2：女；3：保密');

            $table->unsignedInteger('school_id')
                ->default(0)
                ->comment('校园的id，每个用户要属于一个校园');

            $table->unsignedTinyInteger('is_auth')
                ->default(0)
                ->comment('是否完成认证：0：表示未认证；1表示申请认证；2：表示认证失败；3：认证通过');

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
        Schema::dropIfExists('users');
    }
}
