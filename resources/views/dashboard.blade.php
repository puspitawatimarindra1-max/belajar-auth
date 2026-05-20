<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}"
    rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

        <!-- Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="#">

            <div class="sidebar-brand-text mx-3">
                Laravel Admin
            </div>

        </a>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">

                <span>Dashboard</span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/logout">

                <span>Logout</span>

            </a>
        </li>

    </ul>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper"
    class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <h4 class="m-0">
                    Dashboard
                </h4>

            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="card shadow mb-4">

                    <div class="card-body">

                        <h3>
                            Selamat datang,
                            {{ Auth::user()->name }}
                        </h3>

                        <p>
                            Kamu berhasil login menggunakan Laravel.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- JS -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>