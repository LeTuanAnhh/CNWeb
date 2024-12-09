<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('renters')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'phone_number' => '0987654321',
                'email' => 'nva@gmail.com',
            ],
            [
                'name' => 'Trần Thị B',
                'phone_number' => '0912345678',
                'email' => 'ttb@gmail.com',
            ],
        ]);
    }
}