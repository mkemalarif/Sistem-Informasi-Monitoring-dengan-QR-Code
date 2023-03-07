<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusCucian;
use App\Models\Category;
use Illuminate\Support\Carbon;

class RekapitulasiController extends Controller
{
    public function index(Request $request)
    {
        $data = StatusCucian::latest();
        $info = 0;

        if (request('tanggalCollection') == "bulan") {
            $info = 1;
        }
        return view('dashboard.rekapData', [

            "title" => "Rekapitulasi perhari",
            "data" => $data->Tanggal(['tanggal'])->JenisTanggal()->Kategori()->get(),
            "kategori" => Category::latest()->get(),
            "nomor" => 1,
            "total" => 0,
            "info" => $info,
            "pageInformation" => "Rekapitulasi Data",
        ]);
    }
}
