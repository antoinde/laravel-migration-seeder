<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for($i=0; $i<50; $i++){

            /*
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->date('data_partenza');
            $table->time('orario_partenza');
            $table->date('data_arrivo');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 15);
            $table->tinyInteger('numero_carrozze')->unsigned()->default(0);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            */
            $train = new Train();
            $train->azienda= $faker->name();
            $train->stazione_partenza= $faker->city();
            $train->stazione_arrivo= $faker->city();
            $train->data_partenza= $faker->date();
            $train->orario_partenza= $faker->time();
            $train->data_arrivo= $faker->date();
            $train->orario_arrivo= $faker->time();
            $train->codice_treno= $faker->isbn10();
            $train->numero_carrozze= $faker->shuffle([1, 2, 3, 4, 5]);
            $train->in_orario= $faker->boolean();
            $train->cancellato= $faker->boolean();


            $train->save();
        }
    }
}
