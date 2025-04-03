@extends('dashboard')

@section('content')
    <link rel="stylesheet" href="{{ asset('public/create.css') }}">

    <div class="wrapper">
        <header>
            <div class="container">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/login') }}">Đăng nhập</a>
                <a href="{{ url('/register') }}">Đăng ký</a>
            </div>
        </header>

        <div class="content">
            <div class="container-fluid">
                <h1>Create User</h1>
                <form action="{{ route('user.postUser') }}" method="POST">
                    @csrf
                    <div>
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div>
                        <input type="text" placeholder="Sở thích" id="sothich" class="form-control" name="sothich">
                        @if ($errors->has('sothich'))
                            <span class="text-danger">{{ $errors->first('sothich') }}</span>
                        @endif
                    </div>
                    <div>
                        <input type="text" placeholder="Facebook" id="facebook" class="form-control" name="facebook">
                        @if ($errors->has('facebook'))
                            <span class="text-danger">{{ $errors->first('facebook') }}</span>
                        @endif
                    </div>
                    <div>
                        <input type="email" placeholder="Email" id="email_address" class="form-control" name="email"
                            required>
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
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <p>Lập trình web @01/2024</p>
        </footer>
    </div>
@endsection