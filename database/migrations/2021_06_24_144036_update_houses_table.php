<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->boolean('wifi')->after('type'); //me li mette a partire da sotto il type
            $table->boolean('animals')->after('type'); //me li mette a partire da sotto il type
            $table->boolean('tv')->after('type'); //me li mette a partire da sotto il type
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn('wifi');
            $table->dropColumn('animals');
            $table->dropColumn('tv');
        });
    }
}
