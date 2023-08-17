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
        // ■ 單位 => orgs { id, title, org_no, created_at, updated_at}
        Schema::create('orgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255)->comment('單位名稱');
            $table->string('org_no', 255)->comment('單位代碼');
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
        Schema::dropIfExists('orgs');
    }
}
