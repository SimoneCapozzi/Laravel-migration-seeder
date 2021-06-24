<?php

use App\House;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class HousetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*
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
        $table->boolean('wifi')->after('type'); //me li mette a partire da sotto il type
        $table->boolean('animals')->after('type'); //me li mette a partire da sotto il type
        $table->boolean('tv')->after('type'); //me li mette a partire da sotto il type
        */
        for ($i=0; $i < 100 ; $i++) {
            # code...
            $new_house = new House();
            $new_house->reference = $faker->bothify('??-########');
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(30,1000);
            $new_house->room = $faker->numberBetween(1,20);
            $new_house->type = $this->typeRandom();
            $new_house->price = $faker->randomFloat(2,50000,1000000);
            $new_house->wifi = $faker->boolean();
            $new_house->animals = $faker->boolean();
            $new_house->tv = $faker->boolean();
            $new_house->save();
        }

    }

    private function typeRandom(){
        $arr = ['monolocale','bilocale','appartamento','attico','villetta','loft']; //arr tipo di case
        shuffle($arr);//dice di mischiare ogni volta che ricarichi la pagina
        return $arr[0];// mi ritorna il dato partendo dal primo (in posizione 0)
    }

    // funzione che genera un valore causale tra quelli inseriti nell'array
    /* private function available($a, $b){
        $a = 'yes';
        $b = 'no';
        $arr =  [$a, $b];
        shuffle($arr);
        return $arr[0];
    } //funzione di prova per cambiare il valore da 0,1 a si,no
 */

}
