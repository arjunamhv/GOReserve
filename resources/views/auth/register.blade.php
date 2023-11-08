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
    <div class="register-container">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="w-75">
                <div class="card-body">
                    <div id="app">
                        @if(session('success'))
                            <div class="success-message">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="error-message">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <form action="/user/register" method="POST">
                        @csrf
                        <div class="w-100 d-flex justify-content-between mb-4">
                            <div class="form-group has-icon" style="width: 45%;">
                                <label class="text-light fw-bold" for="first-name">First Name</label>
                                <span class="fa-solid fa-user form-control-feedback pt-3 text-light"></span>
                                <input type="text" class="w-100 text-light custom-input ps-5 p-4" id="first-name"
                                    name="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group has-icon" style="width: 45%;">
                                <label class="text-light fw-bold" for="last-name">Last Name</label>
                                <span class="fa-solid fa-lock form-control-feedback pt-3 text-light"></span>
                                <input type="text" class="w-100 text-light custom-input ps-5 p-4" id="last-name"
                                    name="lastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="text-light fw-bold" for="email">Email</label>
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-envelope form-control-feedback pt-3 text-light"></span>
                                <input type="email" class="w-100 text-light custom-input ps-5 p-4" id="email"
                                    name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="text-light fw-bold" for="password">Password</label>
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-lock form-control-feedback pt-3 text-light"></span>
                                <input type="password" class="w-100 text-light custom-input ps-5 p-4" id="password"
                                    name="password" placeholder="Password">
                            </div>
                        </div>

                        <button type="submit" class="btn fw-bold fs-4 text-light w-100 p-3"
                            style="background-color: #224F77; border-radius: 20px;">Register</button>
                        <div class="mb-1 mt-4">
                            <p class="fw-bold text-light text-center mb-3">Or</p>
                        </div>

                        <div>
                            <a href="/register" name="login-google" value="login-google" type="submit"
                                class="w-100 google-btn my-3 btn bg-light"
                                style="padding: 20px;
                            border-radius: 20px;">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3356_2378)">
                                        <path
                                            d="M20.3052 10.2305C20.3052 9.55068 20.2501 8.86724 20.1325 8.19849H10.7002V12.0493H16.1016C15.8775 13.2913 15.1573 14.3899 14.1027 15.0881V17.5867H17.3252C19.2176 15.845 20.3052 13.2729 20.3052 10.2305Z"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M10.6999 20.0008C13.397 20.0008 15.6714 19.1152 17.3286 17.5867L14.1061 15.088C13.2096 15.698 12.0521 16.0434 10.7036 16.0434C8.09474 16.0434 5.88272 14.2833 5.08904 11.917H1.76367V14.4928C3.46127 17.8696 6.91892 20.0008 10.6999 20.0008Z"
                                            fill="#34A853"></path>
                                        <path
                                            d="M5.08564 11.917C4.66676 10.675 4.66676 9.3302 5.08564 8.08824V5.51245H1.76395C0.345611 8.3381 0.345611 11.6671 1.76395 14.4928L5.08564 11.917Z"
                                            fill="#FBBC04"></path>
                                        <path
                                            d="M10.6999 3.95805C12.1256 3.936 13.5035 4.47247 14.536 5.45722L17.3911 2.60218C15.5833 0.904587 13.1838 -0.0287217 10.6999 0.000673888C6.91892 0.000673888 3.46127 2.13185 1.76367 5.51234L5.08537 8.08813C5.87538 5.71811 8.09107 3.95805 10.6999 3.95805Z"
                                            fill="#EA4335"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3356_2378">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span>Continue With Google</span>
                            </a>
                        </div>
                    </form>
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
