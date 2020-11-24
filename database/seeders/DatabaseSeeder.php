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
        // \App\Models\User::factory(10)->create();
        $this->call(GastronomSeeder::class);
        $this->call(SpeisekarteSeeder::class);
        $this->call(KundeCoronaSeeder::class);
        $this->call(GastronomHatKundeCoronaSeeder::class);
        $this->call(GastronomHatSpeisekarteSeeder::class);
    }
}
