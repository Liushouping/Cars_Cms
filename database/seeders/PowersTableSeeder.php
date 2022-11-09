<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\power;

class PowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        power::factory()->count(9)->create();
    }
}
