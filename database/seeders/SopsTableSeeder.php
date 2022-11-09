<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sop;

class SopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sop::factory()->count(1)->create();
    }
}
