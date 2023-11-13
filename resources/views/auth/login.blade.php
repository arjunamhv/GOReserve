@extends('layouts.app')

@section('container')
    <div class="login-container">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="w-50 pb-5">
                <div class="card-body pb-5">
                    <form action="" class="pb-5" method="GET">
                        <div class="mb-3">
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-user form-control-feedback pt-3 text-light"></span>
                                <input type="text" class="w-100 text-light custom-input ps-5 p-4" id="username"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="form-group has-icon">
                                <span class="fa-solid fa-lock form-control-feedback pt-3 text-light"></span>
                                <input type="password" class="w-100 text-light custom-input ps-5 p-4" id="password"
                                    placeholder="Password">
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
                    <p class="mt-3 text-center text-light">Didn't have account yet? <a href="register.html"
                            class="text-underline text-light">Register</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
