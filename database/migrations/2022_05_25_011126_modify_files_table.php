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
        Schema::table('files', function (Blueprint $table) {
            $table->string('file_name')->default('default')->change();
            $table->dropColumn('file_path');
            $table->string('comment')->default('default')->change();
            $table->bigInteger('user_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            $table->string('file_name')->default(NULL)->change();
            $table->string('file_path')->default(NULL);
            $table->string('comment')->default(NULL)->change();
            $table->Integer('user_id')->change();
        });
    }
};
