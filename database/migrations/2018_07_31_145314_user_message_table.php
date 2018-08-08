<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_message', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');

            $table->unsignedInteger('user_id')
                ->index()
                ->index()
                ->comment('用户id');

            $table->string('title')
                ->comment('消息标题');

            $table->enum('source', ['school', 'club'])
                ->index()
                ->comment('消息来源');

            $table->unsignedInteger('source_id')
                ->comment('消息来源id');

            $table->unsignedTinyInteger('status')
                ->default(0)
                ->comment('消息的状态：0表示未读；1表示已读');

            $table->enum('tag', ['msg', 'notice'])
                ->default('msg')
                ->comment('消息类型,msg:消息；notice通知');

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
        Schema::dropIfExists('user_message');
    }
}
