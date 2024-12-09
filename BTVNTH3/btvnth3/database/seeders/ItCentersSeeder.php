<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItCentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('it_centers')->insert([
            [
                'name' => 'Trung tâm Tin học ABC',
                'location' => '456 Đường Y, TP.HCM',
                'contact_email' => 'contact@abc.com',
            ],
            [
                'name' => 'Trung tâm Công nghệ XYZ',
                'location' => '123 Đường Z, Hà Nội',
                'contact_email' => 'info@xyz.com',
            ],
        ]);
    }
}
