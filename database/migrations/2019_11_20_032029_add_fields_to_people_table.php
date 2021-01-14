<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->bigInteger('political_party_id')->unsigned();
            $table->foreign('political_party_id')->references('id')->on('political_parties');
            $table->bigInteger('distrinct_id')->unsigned();
            $table->foreign('distrinct_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            //
            $table->dropForeign('role_id');
            $table->dropColumn('role_id');
            $table->dropForeign('political_party_id');
            $table->dropColumn('political_party_id');
            $table->dropForeign('distrinct_id');
            $table->dropColumn('distrinct_id');
        });
    }
}
