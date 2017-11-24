<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Home;
use App\Special;
use App\Testi;
use App\Bottom;
use App\Citate;


class AllHomeTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Home::truncate();
        Special::truncate();
        Testi::truncate();
        Bottom::truncate();
        Citate::truncate();

        foreach(range(1,3) as $i) {
            Home::create([
                'title' => $faker->sentence(3),
                'desc' => $faker->paragraph(3),
                'icon' => 'fa fa-desktop fa-5x  icon-round  faa-vertical-pulse-horizontal animated'
            ]);
        }

        Special::create([
            'title' => 'What Is Special About Us ?',
            'desc' => $faker->paragraph(7),
            'text' => $faker->text
        ]);

        foreach(range(1,3) as $i) {
            Testi::create([
                'name' => $faker->name('male'),
                'desc' => $faker->sentence(12),
                'img'  => 'bspeak/assets/img/user'. $i .'.gif'
            ]);
        }

        foreach(range(1,3) as $i) {
            Bottom::create([
                'title' => $faker->sentence(3),
                'desc'  => $faker->paragraph(3),
                'icon'  => ' fa fa-folder-open-o (power-off  paper-plane-o) fa-4x rotate-icon '
            ]);
        }

        Citate::create([
            'title' => '',
            'desc' => $faker->paragraph(1),
            'icon' => 'fa fa-edit fa-2x '
        ]);
        Citate::create([
            'title' => '',
            'desc' => $faker->paragraph(3),
            'icon' => 'fa fa-folder-open-o fa-2x'
        ]);
        Citate::create([
            'title' => 'JUST A SMALL INFORMATION :',
            'desc' => $faker->paragraph(3),
            'icon' => 'fa fa-info fa-2x '
        ]);
    }
}
