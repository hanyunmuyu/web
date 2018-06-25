<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClubNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('club_news', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');

            $table->unsignedInteger('club_id')
                ->index()
                ->comment('社团id');

            $table->string('title')
                ->comment('标题');

            $table->mediumText('content')
                ->comment('内容');
            $table->unsignedInteger('favorite_number')
                ->default(0)
                ->comment('喜欢的个数');
            $table->unsignedInteger('click_number')
                ->default(0)
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
        Schema::dropIfExists('club_news');
    }
}
