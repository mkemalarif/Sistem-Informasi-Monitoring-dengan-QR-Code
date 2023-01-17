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
        // request untuk tanggal
        if ($request->tanggal) {
            $data->where("created_at", "like", "%" . $request->tanggal . "%")->get();
        }
        // request default untuk menampilkan semua data
        if ($request->submit == "all") {
            $data->paginate(10)->get();
        }
        // request untuk hari ini
        if ($request->submit == "harian") {
            $data->whereDate("created_at", "like", "%" . now()->toDateString() . "%")->get();
        }
        // request untuk bulan ini
        if ($request->submit == "bulan") {
            $data->whereDate("created_at", "like", "%" . now()->format('m') . "%")->get();
        }
        return view('dashboard.rekapData', [

            "title" => "Rekapitulasi perhari",
            "data" => $data->get(),
            "nomor" => 1,
            "total" => 0
        ]);
    }
}
