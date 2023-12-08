<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <div class="col-sm-12 col-md-5 mx-auto">
                <div class="text-center mb-3">
                    <a href="index.html"><img src="assets/img/logo/logo1.svg" alt=""></a>
                </div>
                <div class="card border border-0">
                    <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                        {{-- @if ($status)
                            <p class="text-success">Session Status</p>
                        @endif --}}
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus autocomplete="username">
                                {{-- @if ($message)
                                    <ul class="text-danger">
                                        @foreach ((array) $messages as $message)
                                            <li>{{ $message }}</li>
                                        @endforeach
                                    </ul>
                                @endif --}}
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                            </div>

                            <div class="me-auto mb-3 form-check">
                                <label class="form-check-label" for="remember_me">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <span>Remember Me</span>
                                </label>
                            </div>

                            <div class="d-flex justify-content-end">
                                @if (Route::has('password.request'))
                                    <div class="p-2 align-items-center">
                                        <a class="text-secondary me-2" href="{{ route('password.request') }}">Forgot your password?</a>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>