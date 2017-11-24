<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Portfolio::truncate();

        foreach(range(1,16) as $i) {
            Portfolio::create([
                'title' => $faker->sentence(4),
                'text' => $faker->paragraph(),
                'customer' => $faker->company,
                'img' => 'bspeak/assets/img/portfolio/'. $i .'.jpg'
            ]);
        }
    }
}
