<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('school_news', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');

            $table->unsignedInteger('school_id')
                ->index()
                ->comment('高校id');

            $table->string('title')
                ->comment('标题');

            $table->string('image_list')
                ->comment('插图，多个插图用逗号分隔');

            $table->text('content')
                ->comment('新闻内容');

            $table->unsignedInteger('click_number')
                ->default(100)
                ->comment('点击次数');

            $table->unsignedTinyInteger('status')
                ->default(1)
                ->comment('新闻状态：1表示可用；0表示不可用');


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
        Schema::dropIfExists('school_news');
    }
}
