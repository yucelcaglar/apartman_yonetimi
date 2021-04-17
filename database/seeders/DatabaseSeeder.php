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
        \App\Models\User::factory(10)->create();
        \App\Models\Blok::factory(10)->create();
        \App\Models\gelir_kalemleri::factory(10)->create();
        \App\Models\gider_kalemleri::factory(10)->create();
        \App\Models\gider_ekle::factory(10)->create();
    }
}
