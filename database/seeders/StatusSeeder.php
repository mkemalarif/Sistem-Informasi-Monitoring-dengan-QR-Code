<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "status" => "Belum dicuci"
        ]);
        Status::create([
            "status" => "Sedang dicuci"
        ]);
        Status::create([
            "status" => "Sedang disetrika"
        ]);
        Status::create([
            "status" => "Menunggu pickup"
        ]);
        Status::create([
            "status" => "Selesai"
        ]);
    }
}
