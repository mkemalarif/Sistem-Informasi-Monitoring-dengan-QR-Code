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
            "username" => "admin",
            "password" => bcrypt("admin")
        ]);

        $this->call([
            CategorySeeder::class,
            StatusSeeder::class
        ]);

        StatusCucian::create([
            "nama" => "rizal asry",
            "category_id" => 1,
            "status_id" => 1,
            "beratCucian" => 4,
            "totalHarga" => "560000"
        ]);
        StatusCucian::create([
            "nama" => "andi muhammad kemal",
            "category_id" => 2,
            "status_id" => 3,
            "beratCucian" => 2,
            "totalHarga" => "354000"
        ]);
        StatusCucian::create([
            "nama" => "fico afrizal",
            "category_id" => 3,
            "status_id" => 2,
            "beratCucian" => 5,
            "totalHarga" => 500000
        ]);
        StatusCucian::create([
            "nama" => "embul bijak",
            "category_id" => 5,
            "status_id" => 5,
            "beratCucian" => 10,
            "totalHarga" => 30000
        ]);
    }
}
