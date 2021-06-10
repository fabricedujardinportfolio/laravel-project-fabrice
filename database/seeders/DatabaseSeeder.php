<?php

namespace Database\Seeders;

use App\Models\Sick;
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
        // Sick::factory(30)->create();
        
        $this->call([
            DoctorSeeder::class,
            SickSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
