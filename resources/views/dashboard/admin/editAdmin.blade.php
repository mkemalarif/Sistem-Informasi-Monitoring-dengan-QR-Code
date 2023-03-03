@extends('dashboard/layout/main')
@section('isiHalaman')

<div class="container-fluid">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-7 offset-2">
                <div class="card">
                    <h3 class="card-header text-center text-light bg-utama">Form Tambah Admin</h3>
                    <div class="card-body">

                        <form action="/dashboard/admin/{{ $data->id }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="row my-3">
                                <div class="col-md-2">
                                    <label for="username" class="form-label">Username
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid
                                        @enderror" id="username" placeholder="username"
                                        value="{{ old('username', $data->username) }}" required>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-2">
                                    <label for="nama" class="form-label">nama admin
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid
                                        @enderror" id="nama" placeholder="nama" value="{{ old('nama', $data->nama) }}"
                                        required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-2">
                                    <label for="password" class="form-label">Password
                                    </label>
                                </div>

                                <div class="col">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password" value="{{ old('value', $data->password) }}" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-2">
                                    <label for="role" class="form-label">role</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" name="role" id="role" required>
                                        <option value="admin">admin</option>
                                        <option value="nonaktif">nonaktif</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection