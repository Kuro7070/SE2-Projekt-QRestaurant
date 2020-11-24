<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KundeCoronaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //email, nachname, vorname
        // adresse, telefonnumer, datum
        // verlbeib
        DB::table('kunde_corona')->insert([
            'email'         =>  'patrick@franzose.de',
            'nachname'      => 'zike',
            'vorname'       =>  'patrick',
            'adresse'       =>  'JKDAStraße 20',
            'telefonnummer' =>  '7654321',
            'datum' =>  now(),
            'verbleib' =>  '180',
        ]);
    }
}
