<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PerroSeeder::class);
    }
}
