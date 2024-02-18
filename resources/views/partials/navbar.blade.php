<nav class="navbar navbar-expand-lg bg-dark navbar-dark px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'list-karyawan' ? 'active' : '' }}" href="/list-karyawan">List
                        Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
