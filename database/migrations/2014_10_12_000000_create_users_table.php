<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ■ 使用者 => users { id, org_id, name, birthday, email,
                            // account, password, status, created_at, updated_at}
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('org_id')->index()->comment("單位ID");
            $table->string('name', 50)->comment("姓名");
            $table->date('birthday')->nullable()->comment("生日");
            $table->string('email', 255)->comment("信箱");
            $table->string('account', 100)->index()->comment("帳號");
            $table->string('password', 255)->comment("密碼");
            $table->boolean('status')->default(0)->comment('審核狀態');
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
};
