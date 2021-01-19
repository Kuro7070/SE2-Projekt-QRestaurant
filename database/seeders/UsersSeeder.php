<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //id, karte

//        $imagelink = file_get_contents('resources/img/speisekarteDump.png');
//        $encdata = base64_encode($imagelink);

        DB::table('users')->insert([
            'vorname'     => "Test",
            'nachname'    => "Mr. Tester",
            'street'   => "Teststr",
            'streetno' => "111",
            'zip'      => "22769",
            'ort'      => "Hamburg",
            'telefonnummer'      => "0157128",
            'email'    => "test@test.de",
            'password' => "$2y$10$.5bKaf499rWw.c5raesXkuADsX5TKz.m5g/mc8P5KTpBiNv9gZJXi",

        ]);
    }
}
