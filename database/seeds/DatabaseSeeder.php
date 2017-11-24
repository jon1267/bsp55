<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(AllHomeTablesSeeder::class);
        //$this->call(AboutUsTableSeeder::class);
        //$this->call(AllFooterTableSeeder::class);
        //$this->call(PortfoliosTableSeeder::class);
        $this->call(ForAllBlogsTableSeeder::class);
    }
}
