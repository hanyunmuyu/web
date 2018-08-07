<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolRecommendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('school_recommend', function (Blueprint $table) {

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');

            $table->string('title');

            $table->string('description')
                ->comment("推荐描述");

            $table->string('image_list')
                ->nullable()
                ->comment('配图');

            $table->enum('source', ['school', 'club']);

            $table->unsignedInteger('source_id')
                ->comment('资源的id');

            $table->unsignedTinyInteger('status')
                ->default(1)
                ->comment('1表示可用；0表示不可用');

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
        Schema::dropIfExists('school_recommend');
    }
}
