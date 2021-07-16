<?php

namespace Database\Seeders;

use App\Models\Taxis;
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
        Taxis::factory()->count(6)->create();
    }
}
