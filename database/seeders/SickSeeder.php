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
        ['name' => 'arthur',
         'email'=> 'arthur@gmail.com'
        ],
        ['name' => 'boby',
        'email'=> 'boby@gmail.com'
       ],
        ['name' => 'boule',
        'email'=> 'boule@gmail.com'
       ],
        ['name' => 'toto',
        'email'=> 'toto@gmail.com'
       ],
        ['name' => 'joseph',
        'email'=> 'joseph@gmail.com'
       ],
        ['name' => 'michel',
        'email'=> 'michel@gmail.com'
       ],]
    );
    }
}
