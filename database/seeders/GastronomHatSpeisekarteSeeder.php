<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastronomHatSpeisekarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //corona_id, gastro_id
        DB::table('gastronom_hat_speisekarte')->insert([
            'speise_id' =>  '1',
            'gastro_id' =>  '1',
        ]);
    }
}
