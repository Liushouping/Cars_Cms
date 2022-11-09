<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivitysTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(PowersTableSeeder::class);
        $this->call(SopsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(AdminTablesSeeder::class);
    }
}
