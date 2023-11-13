<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('assets/dist/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('custom/css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="p-absolute">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
    </div>
    <div class="login-container">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="w-50 pb-5">
                <div class="card-body pb-5">
                    <form action="/welcome" class="pb-5" method="GET">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-user form-control-feedback pt-3 text-light"></span>
                                <input type="email" class="w-100 text-light custom-input ps-5 p-4" name="email"
                                    id="email" placeholder="email">
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-lock form-control-feedback pt-3 text-light"></span>
                                <input type="password" class="w-100 text-light custom-input ps-5 p-4" name="password"
                                    id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label text-light" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn fw-bold fs-4 text-light w-100 p-3"
                            style="background-color: #224F77;
                        border-radius: 20px;">Login</button>
                    </form>
                    <div class="row">
                        <div class="col text-right">
                            <span class=""><a href="{{ route('forgot.password.get') }}" class="text-primary">Forgot Password ?</a></span>
                        </div>
                    </div>
                    <p class="mt-3 text-center text-light">Didn't have account yet? <a href="/register"
                            class="text-underline text-light">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
