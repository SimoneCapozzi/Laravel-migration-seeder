<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);//nome e lunghezza varchar
            $table->string('address', 100);//nome e lunghezza varchar
            $table->string('postal_code', 10);//nome e lunghezza varchar
            $table->string('city', 50);//nome e lunghezza varchar
            $table->string('state', 50); //nome e lunghezza varchar
            $table->smallInteger('square_meters')->unsigned(); //nome e insigned perchè non deve essere negativo (significa che non puo avere un valore negativo essendo un numero)
            $table->tinyInteger('room')->unsigned(); //nome e unsigned (come sopra)
            $table->string('type', 50); //nome e lunghezza varchar (appartamento)
            $table->text('description')->nullable(); //nome e nullable è come NULL puoi scriverci dentro o meno e non da errori
            $table->float('price', 10,2); //tipo lunghezza, numero dei decimali
            $table->boolean('is_available')->default(1); //disponibilità, di default si quindi 1
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
        Schema::dropIfExists('houses');
    }
}
