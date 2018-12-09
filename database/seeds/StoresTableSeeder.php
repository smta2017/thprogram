<?php

use Illuminate\Database\Seeder;

use App\store;
use Faker\Factory;

class IteamNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        store::truncate();

        foreach (range(1,10) as $i) {
            
            $store = store::create([
 
                'storename' => $faker->name,
                'sdescrip' => $faker->name
            ]);
            
        }
    }
}
