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
    <section class="w-100 bg-dark" style="height: 100vh;">
        <div class="container">
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
    
            <div class="row justify-content-between mt-2">
                <div class="col-sm-10 col-md-6 container bg-light mt-3">
                    <form action="{{ route('reset.password.post') }}" method="POST" id="form-reset-password"
                        class="form-group col-sm-12 col-md-12 col-lg-11 mx-auto my-5" autocomplete="off">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
    
                        <div class="mb-4">
                            <label for="email_address" class="form-label mb-2"><span>Email Address</span></label>
                            <div class="mb-3">
                                <input type="email" id="email_address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="email@gmail.com" required autofocus>
                                <small class="invalid-feedback">{{ $errors->first('email') }}</small>
                            </div>
    
                            <label for="password" class="form-label mb-2"><span>New Password</span></label>
                            <div class="mb-3">
                                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required autofocus>
                                <small class="invalid-feedback">{{ $errors->first('password') }}</small>
                            </div>
    
                            <label for="password-confirm" class="form-label mb-2"><span>Confirm New Password</span></label>
                            <div class="mb-3">
                                <input type="password" id="password-confirm" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirm New Password" required autofocus>
                                <small class="invalid-feedback">{{ $errors->first('password_confirmation') }}</small>
                            </div>
                        </div>
    
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary btn-block rounded-lg py-2 px-4">
                                <i class="ion-android-exit me-2"></i>
                                <span>Reset Password</span>
                            </button>
                        </div>
    
                        <div class="row justify-content-center mb-3">
                            <div class="col-auto">
                                <span class="text-muted">Don't Have An Account?</span>
                            </div>
                            <div class="col-auto">
                                <a href="/register" class="text-muted amd-text-blue">Create a New Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
