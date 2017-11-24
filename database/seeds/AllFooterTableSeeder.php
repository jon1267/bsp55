<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Footer;
use App\Prefooter;
use App\Address;

class AllFooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Footer::truncate();
        Prefooter::truncate();
        // в футере 1 запись полноценная, 2-е токо заголовок
        foreach (range(1,3) as $i) {
            Footer::create([
                'title' => $faker->sentence(2),
                'desc'  => ($i == 1) ? $faker->sentence(12) : '',
                'icon'  => 'fa fa-building (-paper-plane-o -sliders) fa-2x'
            ]);
        }

        // 2-record for what media says, 1 for request quote
        foreach(range(1,3) as $i) {
            Prefooter::create([
                'title' => '',
                'desc'  =>  $faker->sentence(12),
                'source' => $faker->words(3,true)
            ]);
        }

        Address::create([
            'title' => 'Our location',
            'str1'  =>  $faker->country . $faker->city,
            'str2'  =>  $faker->streetAddress,
            'str3'  =>  $faker->email,
        ]);
    }
}
