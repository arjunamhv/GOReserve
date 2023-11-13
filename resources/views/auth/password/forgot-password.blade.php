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
    <div class="w-100 bg-dark" style="height: 100vh;">
        <div class="row justify-content-between mt-2">
            <div class="col-sm-10 mx-auto bg-light rounded-4 col-md-6 mt-3">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
    
                <form action="{{ route('forgot.password.post') }}" method="POST" class="mt-5 p-4">
                    @csrf
                    <div class="my-4">
                        <h2 class="logintext mb-4">Reset Your Password</h2>
                        <div class="mb-3">
                            <label for="email_address" class="form-label text-light-green">Email Address</label>
                            <input type="email" id="email_address"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                placeholder="email@gmail.id" required autofocus>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
    
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary btn-block rounded-lg py-2 px-4">
                                <i class="ion-android-exit me-2"></i>
                                <span>Send Password Reset Link</span>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
