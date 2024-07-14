@extends('index')
<nav class="navbar navbar-dark bg-danger fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand">!N Aware</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-danger" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ADMIN</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <form action="/dashboard" method="GET">
                            <button type="submit" class="btn btn-danger">Home</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="/response" method="GET">
                            <button type="submit" class="btn btn-danger">Response</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
                <a class="btn btn-custom btn-danger w-100">
                    <span class="btn-label">Copyright &copy; <?= date("Y"); ?></span>
                </a>
        </div>
    </div>
</nav>
