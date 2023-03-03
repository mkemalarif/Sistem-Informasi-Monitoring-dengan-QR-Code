<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\StatusCucian;
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
        // \App\Models\User::factory(10)->create();

        // user seed, tidak diganggu gugat
        User::create([
            "username" => "owner",
            "nama" => "anita salim",
            "password" => bcrypt("ownerfarizlaundry"),
            "role" => "owner"
        ]);

        $this->call([
            CategorySeeder::class,
            StatusSeeder::class
        ]);

        StatusCucian::create([
            "nama" => "rizal asry",
            "user_id" => 1,
            "category_id" => 1,
            "status_id" => 1,
            "beratCucian" => 4,
            "totalHarga" => "560000",
            "pembayaran" => "Belum Lunas"
        ]);
        StatusCucian::create([
            "nama" => "andi muhammad kemal",
            "user_id" => 1,
            "category_id" => 2,
            "status_id" => 3,
            "beratCucian" => 2,
            "totalHarga" => "354000",
            "pembayaran" => "Belum Lunas"
        ]);
        StatusCucian::create([
            "nama" => "fico afrizal",
            "user_id" => 1,
            "category_id" => 3,
            "status_id" => 2,
            "beratCucian" => 5,
            "totalHarga" => 500000,
            "pembayaran" => "Lunas"
        ]);
        StatusCucian::create([
            "nama" => "embul bijak",
            "user_id" => 1,
            "category_id" => 5,
            "status_id" => 5,
            "beratCucian" => 10,
            "totalHarga" => 30000,
            "pembayaran" => "Lunas"
        ]);
    }
}
