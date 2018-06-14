<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClubUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('club_user', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');

            $table->unsignedInteger('club_id')
                ->index()
                ->comment('社团id');

            $table->unsignedInteger('user_id')
                ->index()
                ->comment('用户id');

            $table->unsignedInteger('group_id')
                ->default(0)
                ->comment('用户组id');

            //先关注然后申请加入经过同意才是成员
            $table->unsignedTinyInteger('status')
                ->default(1)
                ->comment('社团用户状态，先关注然后申请加入经过同意才是成员：1：关注；2：申请加入；3：成员');

            //社团用户等级
            $table->unsignedTinyInteger('level')
                ->default(0)
                ->comment('用户等级：0：普通用户；1：普通管理员；2：超级管理员');

            $table->unique(['club_id', 'user_id']);

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
        Schema::dropIfExists('club_user');
    }
}
