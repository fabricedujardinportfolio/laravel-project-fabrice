<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bookings')->insert(
            [
                [
            'booking_at' => '2018-12-31 23:59:59',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu justo feugiat, pellentesque justo vitae,',
            'doctor_id' => (1),
            'sick_id' => (2),
                ],
                [
            'booking_at' => '2018-11-31 23:59:59',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu justo feugiat, pellentesque justo vitae,',
            'doctor_id' => (3),
            'sick_id' => (1),
                ],
                [
            'booking_at' => '2018-10-31 23:59:59',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu justo feugiat, pellentesque justo vitae,',
            'doctor_id' => (4),
            'sick_id' => (2),
                ],
                [
            'booking_at' => '2018-12-24 23:59:59',
            'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu justo feugiat, pellentesque justo vitae,',
            'doctor_id' => (5),
            'sick_id' => (4),
                ],
            ]
    );
    }
}
