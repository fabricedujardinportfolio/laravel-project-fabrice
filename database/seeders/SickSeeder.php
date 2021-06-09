<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sicks')->insert([
        ['name' => 'arthur'],
        ['name' => 'boby'],
        ['name' => 'boule'],
        ['name' => 'toto'],
        ['name' => 'joseph'],
        ['name' => 'michel'],]
    );
    }
}
