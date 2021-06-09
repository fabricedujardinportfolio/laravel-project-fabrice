<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            ['name' => 'fabrice'],
            ['name' => 'paul'],
            ['name' => 'greg'],
            ['name' => 'ben'],
            ['name' => 'male'],
            ['name' => 'mel'],]
        );
    }
}
