<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $today = date('Y-m-d');
        $nextDay = date('Y-m-d', strtotime('+1 day'));
        for($index = 0; $index < 10; $index++){
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->Codice_Treno = $faker->numberBetween(50, 99999);
            $new_train->Numero_Carrozze = $faker->numberBetween(1, 14);
            $new_train->data = $faker->dateTimeBetween($today, $nextDay);
            $new_train->In_orario = $faker->boolean();
            $new_train->Cancellato = $faker->boolean();


            $inOrario = $faker->boolean();
            $cancellato = $faker->boolean();
            
            if ($inOrario && $cancellato) {
                $inOrario = 0;
            } elseif (!$inOrario && !$cancellato) {
                $cancellato = 1;
            }
            
            $new_train->In_orario = $inOrario;
            $new_train->Cancellato = $cancellato;
            
            $new_train->data = $faker->dateTimeBetween($today, $nextDay);
            $new_train->save();

        }
    }
}
