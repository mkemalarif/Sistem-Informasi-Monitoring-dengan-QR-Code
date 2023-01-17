<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statuscucian;
use App\Models\Category;
use App\Models\Status;


class StatusCucianController extends Controller
{
    public function index()
    {
        return view("statusCucian", [
            "title" => "Halaman Status",
            "data" => 0
        ]);
    }

    public function cari()
    {

        return view("statusCucian", [
            "title" => "Halaman Status",
            "data" => StatusCucian::latest()->where("noTransaksi", "=", request("search"))->get(),
            "status" => Status::all()
        ]);
    }
}
