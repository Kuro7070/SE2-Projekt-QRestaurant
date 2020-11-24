<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastronomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gastronom')->insert([
        'email'         =>  'marcel@spanier.de',
        'passwort'      =>  '123macA',
        'nachname'      => 'Janko',
        'vorname'       =>  'Marcel',
        'adresse'       =>  'ABCStraße 50',
        'telefonnummer' =>  '01234567',
        ]);
    }
}
#php artisan make:seeder NameSeeder
#run -> php artisan db:seed
