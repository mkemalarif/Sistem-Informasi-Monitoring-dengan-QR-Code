<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statuscucian;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StatusCucianController extends Controller
{
    public function index()
    {
        return view("statusCucian", [
            "title" => "Halaman Status",
            "data" => 0
        ]);
    }

    public function cari(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data, [
            "search" => "exists:status_cucians,noTransaksi",
        ]);
        if ($validasi->fails()) {
            return redirect()->back()
                ->withErrors($validasi)->withInput();
        }

        return view("statusCucian", [
            "title" => "Halaman Status",
            "data" => StatusCucian::latest()->where("noTransaksi", "=", request("search"))->get(),
            "status" => Status::all()
        ]);
    }
}
