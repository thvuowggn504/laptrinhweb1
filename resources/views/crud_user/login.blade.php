<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
    @extends('dashboard')

    @section('content')
        <link rel="stylesheet" href="{{ asset('public/login.css') }}">

        <div class="wrapper">
            <header>
                <div class="container">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/login') }}">Đăng nhập</a>
                    <a href="{{ url('/create') }}">Đăng ký</a>
                </div>
            </header>

            <div class="content">
                <div class="container-fluid">
                    <h1>Login</h1>
                    <form method="POST" action="{{ route('user.authUser') }}">
                        @csrf
                        <div>
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password"
                                required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                        <div>
                            <button type="submit">Signin</button>
                        </div>
                    </form>
                </div>
            </div>

            <footer>
                <p>Lập trình web @01/2024</p>
            </footer>
        </div>
    @endsection
</body>

</html>