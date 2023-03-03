<?php

namespace App\Http\Controllers;

use App\Models\StatusCucian;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StatusCucian::latest();

        if (request("searchBar")) {
            $data->where("nama", "like", "%" . request("searchBar") . "%")->paginate(1);
        }

        return view('dashboard.index', [
            "title" => "Dashboard",
            "data" => $data->paginate(10),
            "nomor" => 1,
            "pageInformation" => "dashboard"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahTransaksi', [
            "title" => "Tambah Transaksi",
            "data" => Category::all(),
            "pageInformation" => "Tambah Transaksi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {

        $validated = $request->validate([
            "nama" => "required|max:255",
            "category_id" => "required",
            "beratCucian" => "required",
            "pembayaran" => "required"
        ]);

        $validated['status_id'] = 1;
        $validated["totalHarga"] = (int)["beratCucian"] * (int)[$category->harga];
        $validated["user_id"] = auth()->user()->id;

        StatusCucian::create($validated);

        return redirect('/dashboard')->with("success", "Transaksi Berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusCucian  $statusCucian
     * @return \Illuminate\Http\Response
     */
    public function show(StatusCucian $statusCucian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusCucian  $statusCucian
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusCucian $dashboard)
    {
        return view("dashboard.editTransaksi", [
            "title" => "edit transaksi",
            "data" => Category::all(),
            "info" => $dashboard,
            "status" => Status::all(),
            "pageInformation" => "Edit Transaksi"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatusCucian  $statusCucian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusCucian $dashboard)
    {
        $validated = $request->validate([
            "nama" => "required|max:255",
            "category_id" => "required",
            "status_id" => "required",
            "beratCucian" => "required",
            "pembayaran" => "required"
        ]);
        if ($validated["status_id"] == 5) {
            $validated["pembayaran"] = "lunas";
        }

        StatusCucian::where("noTransaksi", $dashboard->noTransaksi)->update($validated);
        return redirect('/dashboard')->with("success", "Transaksi Berhasil Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusCucian  $statusCucian
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusCucian $dashboard)
    {

        // dd("$request->$statusCucian");
        $dashboard->delete();

        return redirect("/dashboard")->with("success", "Data Berhasil dihapus");
    }
}
