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
        // request untuk tanggal
        if ($request->tanggal) {
            $data->where("created_at", "like", "%" . $request->tanggal . "%")->get();
        }
        // request default untuk menampilkan semua data
        if ($request->semua) {
            $data->get();
        }
        // request untuk hari ini
        if ($request->harian) {
            $data->whereDate("created_at", "like", "%" . today()->toDateString() . "%")->get();
        }

        // request untuk bulan ini
        if ($request->bulan) {
            // $data->whereDate("created_at", "like", "%" . now()->format('m') . "%")->get();
            $data->whereYear("created_at", now()->format('Y'))
                ->whereMonth("created_at", now()->format('m'))
                ->get();
            $info = 1;
        }
        return view('dashboard.rekapData', [

            "title" => "Rekapitulasi perhari",
            "data" => $data->get(),
            "kategori" => Category::latest(),
            "nomor" => 1,
            "total" => 0,
            "info" => $info,
            "pageInformation" => "Rekapitulasi Data"
        ]);
    }
}
