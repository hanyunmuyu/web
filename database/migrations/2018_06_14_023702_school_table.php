<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('school', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id')
                ->comment('校园的id');

            $table->string('school_name')
                ->unique()
                ->comment('校园的名称');

            $table->string('school_logo')
                ->nullable()
                ->comment('校园的logo');

            $table->string('school_description')
                ->nullable()
                ->comment('高校的描述信息');
            $table->unsignedInteger('favorite_number')
                ->default(0)
                ->comment("关注的人数");

            $table->unsignedInteger('club_number')
                ->default(0)
                ->comment('社团的数量');

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
        Schema::dropIfExists('school');
    }
}
