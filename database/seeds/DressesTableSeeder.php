<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            $dress = new Dress();
            $dress->nome=$faker->name;
            $dress->descrizione=$faker->text;
            $dress->prezzo=$faker->randomFloat(2,1,9999);
            $dress->save();
        }
    }
}
