<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::latest();
        if (request("search")) {
            $admin->where("username", "like", "%" . request("search") . "%")->paginate(1);
        }

        return view("dashboard.admin.index", [
            "title" => "Index Admin",
            "admin" => $admin->paginate(10),
            "nomor" => 1,
            "pageInformation" => "Halaman Owner"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/admin/tambahAdmin", [
            "title" => "Tambah Admin",
            "data" => User::all(),
            "pageInformation" => "Tambah Admin"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $admin)
    {
        $validated = $request->validate([
            "username" => "required",
            "nama" => "required",
            "password" => "required"
        ]);
        $validated["role"] = "admin";
        $validated['password'] = bcrypt($validated['password']);

        $admin->create($validated);
        return redirect('/dashboard/admin')->with("success", "admin berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view("dashboard/admin/editAdmin", [
            "title" => "Halaman Edit Admin",
            "pageInformation" => "Edit Admin",
            "data" => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        //
        $validated = $request->validate([
            "username" => "required",
            "password" => "required",
            "nama" => "required",
            "role" => "required",
        ]);
        $validated['password'] = bcrypt($validated['password']);

        $admin->where("id", $admin->id)->update($validated);
        return redirect('/dashboard/admin')->with("success", "Data Admin Berhasil Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
