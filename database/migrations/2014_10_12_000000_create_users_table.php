<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('owner_type')->comment('所属人类型');
            $table->unsignedBigInteger('owner_uid')->comment('所属人ID');
            $table->string('username', 60)->nullable()->comment('用户名');
            $table->string('mobile', 20)->nullable()->comment('手机号');


            $table->string('nickname')->nullable()->comment('昵称');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('email')->nullable()->comment('邮箱');

            $table->string('password')->nullable();

            $table->timestamps();
            $table->unique('username');
            $table->comment('用户表');
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
};
