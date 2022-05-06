<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 500; $i++) {
            $trainData = [
                'azienda'               => $faker->company(),
                'stazione_di_partenza'  => $faker->city(),
                'stazione_di_arrivo'    => $faker->city(),
                'orario_di_partenza'    => $faker->dateTimeBetween('-2 week', '-1 week'),
                'orario_di_arrivo'      => $faker->dateTimeBetween('-1 week', 'now'),
                'cancellato'            => $faker->numberBetween(0, 1),
                'in_orario'             => $faker->numberBetween(0, 1),
                'price'                 => $faker->randomFloat(2, 1, 999),
                'codice_treno'          => $faker->numberBetween(10000, 99999),
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
