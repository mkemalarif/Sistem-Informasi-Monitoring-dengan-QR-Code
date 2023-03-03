<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusCucian;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PrintController extends Controller
{
    public function show(StatusCucian $noTransaksi)
    {
        $url = env('APP_URL');
        return view("/print", [
            "title" => "print page",
            "data" => $noTransaksi,
            "qrCode" => QrCode::size(150)->generate($url . '/statusCucian/cari?search=' . $noTransaksi->noTransaksi)
        ]);
    }
}
