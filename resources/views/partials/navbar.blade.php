{{-- navbar start --}}
<nav
    class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient border-bottom border-2 border-dark shadow-sm sticky-top">
    <div class="container">
        {{-- Logo dengan teks tebal --}}
        <a class="navbar-brand fw-bold" href="/">
            <i class="bi bi-filetype-php"></i> 404 LaraveL
        </a>

        <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- Active link menggunakan bg-white atau border-bottom putih agar menonjol di atas merah --}}
                    <a class="nav-link {{ ($active === 'home') ? 'active fw-bold' : ''}}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'about') ? 'active fw-bold' : ''}}" href="/about">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categories') ? 'active fw-bold' : ''}}" href="/categories">
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'posts') ? 'active fw-bold' : ''}}" href="/posts">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'contact') ? 'active fw-bold' : ''}}" href="/contact">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === 'login') ? 'active fw-bold' : ''}}" href="/login"><i
                                class="bi bi-box-arrow-in-left"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
{{-- navbar end --}}
