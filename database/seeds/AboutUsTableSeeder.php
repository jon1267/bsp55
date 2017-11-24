<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Srv;
use App\Serv;
use App\Servi;
use App\Team;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Srv::truncate();
        Serv::truncate();
        Servi::truncate();
        Team::truncate();

        Srv::create([
            'title' => $faker->sentence(4),
            'desc' => $faker->paragraph(3),
        ]);

        foreach(range(1,3) as $i) {
            Serv::create([
                'title' => $faker->words(2, true),
                'desc' => ($i == 3) ? '' : $faker->paragraph(3),
                'icon' => ($i == 3) ? '' : 'fa fa-desktop (paper-plane-o) fa-5x  rotate-icon clr-main'
            ]);
        }

        foreach(range(1,3) as $i) {
            Servi::create([
                'title' => $faker->sentence(2),
                'desc' => $faker->paragraph(3),
                'icon' => ' fa fa-folder-open-o (-power-off  -paperclip) fa-4x rotate-icon '
            ]);
        }

        foreach(range(1,4) as $i) {
            Team::create([
                'name' => $faker->name,
                'position' => $faker->jobTitle,
                'desc' => $faker->paragraph(3),
                'img' => 'bspeak/assets/img/team/team'.$i.'.jpg'
            ]);
        }


    }
}
