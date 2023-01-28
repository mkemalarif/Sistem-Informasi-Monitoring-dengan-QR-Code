<header class="navbar navbar-dark sticky-top navbarcolor flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard">Fariz Laundry</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <li class="nav-item me-3">
            <form action="/logout">
                @csrf
                <button type="submit" class="nav-link btn text-light" href="#">
                    Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
            </form>
        </li>
    </div>
</header>