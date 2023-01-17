<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->enum("jenisTransaksi", array("reguler", "express", "super express", "extra express", "cuci kering", "cuci lipat", "cuci lipat express", "paket 1", "paket 2", "paket 3"));
        Category::create([
            "jenisTransaksi" => "reguler",
            "harga" => "8000"
        ]);

        Category::create([
            "jenisTransaksi" => "express",
            "harga" => "10000"
        ]);

        Category::create([
            "jenisTransaksi" => "super express",
            "harga" => "15000"
        ]);

        Category::create([
            "jenisTransaksi" => "extra express",
            "harga" => "20000"
        ]);
        Category::create([
            "jenisTransaksi" => "cuci kering",
            "harga" => "4000"
        ]);
        Category::create([
            "jenisTransaksi" => "cuci lipat",
            "harga" => "6000"
        ]);
        Category::create([
            "jenisTransaksi" => "cuci lipat express",
            "harga" => "8000"
        ]);
        // Category::create([
        //     "idCategory" => "8",
        //     "jenisTransaksi" => "paket 1",
        //     "harga" => "8000"
        // ]);
        // Category::create([
        //     "idCategory" => "9",
        //     "jenisTransaksi" => "paket 2",
        //     "harga" => "8000"
        // ]);
        // Category::create([
        //     "idCategory" => "10",
        //     "jenisTransaksi" => "paket 3",
        //     "harga" => "8000"
        // ]);
    }
}
