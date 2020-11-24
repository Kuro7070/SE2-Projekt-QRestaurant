<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeisekarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //id, karte

        $imagelink = file_get_contents('resources/img/speisekarteDump.png');
        $encdata = base64_encode($imagelink);

        DB::table('speisekarte')->insert([
            'karte'         =>  $encdata,

        ]);

    }
}
