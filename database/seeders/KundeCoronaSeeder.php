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
        DB::table('customers')->insert([
            'email'         =>  'patrick@franzose.de',
            'nachname'      => 'zike',
            'vorname'       =>  'patrick',
            'street'       =>  'JKDAStraße',
            'streetno'       =>  '20',
            'ort'       =>  'Hamburg',
            'zip' =>  '761',
            'telefonnummer' =>  '7654321',
            'ankunft' =>  '20:15',
            'abreise' =>  '23:15',
            'verbleib' =>  '180',
        ]);
    }
}
