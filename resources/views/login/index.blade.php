@extends("layout.main")

@section("container")

<div class="container-fluid">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh">

        @if(session()->has("loginError"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session("loginError") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-7 col-md-7 offset-md-2 offset-lg-0">
                <img class="img-fluid" src="{{ asset('img/loginIcon2.png') }}" alt="mesincuci" style="height: 18rem">
            </div>
            <div class="col-lg-5 col-md-7 offset-md-2 offset-lg-0 mt-3">
                <div class="card logincolor border border-2 rounded-2 shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center tulisanbiru">User Login</h5>
                        <main class="form-signin m-auto">

                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-floating mb-3 mt-4">
                                    <input type="text" name="username" id="username" class="form-control" autofocus
                                        required>
                                    <label for="username">Username</label>
                                </div>

                                <div class="form-floating">
                                    <input type="password" name="password" id="password"
                                        class="@error('password') is-invalid @enderror form-control " required>
                                    <label for="password">Password</label>
                                </div>
                                <button class="btn btn-lg btn-primary my-3 w-100" type="submit">Login</button>
                            </form>

                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- <div class="row mt-5">
    <div class="col-lg-6 col-md-7 offset-md-2 offset-lg-0">
        <img class="img-fluid" src="{{ asset('img/loginIcon2.png') }}" alt="mesincuci">
    </div>
    <div class="col-lg-4 col-md-7 offset-md-2 offset-lg-1 mt-3">
        <div class="card logincolor border border-2 rounded-2 shadow">
            <div class="card-body">
                <h5 class="card-title text-center tulisanbiru">User Login</h5>
                <main class="form-signin m-auto">
                    <form>
                        <div class="form-floating mb-3 mt-4">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                name="email" autofocus required>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="btn btn-lg btn-primary my-3 w-100" type="submit">Login</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div> --}}