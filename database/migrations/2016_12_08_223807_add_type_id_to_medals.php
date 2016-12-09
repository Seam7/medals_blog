<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeIdToMedals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medals', function (Blueprint $table) {
            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')->references('id')->on('medal_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medals', function (Blueprint $table) {
            $table->dropIndex(['type_id']);
            $table->dropForeign(['type_id']);
        });
    }
}
