<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedFlagIntoUserss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userss', function (Blueprint $table) {
            $table->tinyInteger('is_deleted')->default(0)->after('address');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userss', function (Blueprint $table) {
            $table->dropColumn('is_deleted');
        });
    }
}
