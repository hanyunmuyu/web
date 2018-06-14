<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('club', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id')
                ->comment('社团的id');

            $table->string('club_name')
                ->comment('社团名称');

            $table->string('club_logo')
                ->nullable()
                ->comment('社团的徽章');

            $table->string('club_description')
                ->nullable()
                ->comment('社团描述');

            $table->unsignedInteger('school_id')
                ->comment('校园id')
                ->index();

            $table->unsignedInteger('create_user_id')
                ->index()
                ->comment('创建社团的用户id');


            $table->string('club_category_ids')
                ->nullable()
                ->comment('社团分类：所有分类用逗号隔开');

            $table->unsignedTinyInteger('status')
                ->default('1')
                ->comment('状态：0：禁用；1：新申请；2：申请驳回；3：申请通过');

            $table->unique(['club_name', 'school_id']);
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
        Schema::dropIfExists('club');
    }
}
