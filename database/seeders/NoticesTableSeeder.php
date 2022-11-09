<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notice;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Notice::factory()->count(1)->create();
    }
}
