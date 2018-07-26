<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('school_department', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->unsignedInteger('school_id')
                ->index();

            $table->string('department_name')
                ->unique()
                ->comment('学院名称');

            $table->string('department_logo')
                ->comment('学院logo');

            $table->string('create_user_id')
                ->index()
                ->comment('创建学院的用户id');

            $table->unsignedTinyInteger('status')
                ->default('1')
                ->comment('状态：0：禁用；1：新申请；2：申请驳回；3：申请通过');

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
        Schema::dropIfExists('school_department');
    }
}
