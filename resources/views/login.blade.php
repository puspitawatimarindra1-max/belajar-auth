<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}"
    rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-6 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="card-body p-0">

                    <div class="p-5">

                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                Login
                            </h1>
                        </div>

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="/login" method="POST">
                            @csrf

                            <div class="form-group mb-3">

                                <input type="email"
                                class="form-control form-control-user"
                                name="email"
                                placeholder="Email">

                            </div>

                            <div class="form-group mb-3">

                                <input type="password"
                                class="form-control form-control-user"
                                name="password"
                                placeholder="Password">

                            </div>

                            <button class="btn btn-primary btn-user btn-block w-100">
                                Login
                            </button>

                        </form>

                        <hr>

                        <div class="text-center">
                            <a href="/register">
                                Belum punya akun?
                            </a>
                        </div>

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