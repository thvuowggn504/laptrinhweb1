@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container" style="max-width: 400px; margin: 0 auto; padding: 20px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="border: none; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">
                        <h3 class="card-header text-center" style="background-color: #007bff; color: white; padding: 15px; margin-bottom: 0;">Update User</h3>
                        <div class="card-body" style="padding: 25px; background: #fff;">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{ $user->id }}">
                                <div class="form-group mb-4">
                                    <label for="name" style="font-weight: 600; margin-bottom: 8px; display: block;">Full Name</label>
                                    <input type="text" placeholder="Nhập tên của bạn" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus style="padding: 10px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s;">
                                    @if ($errors->has('name'))
                                        <span class="text-danger" style="font-size: 0.9em;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="sothich" style="font-weight: 600; margin-bottom: 8px; display: block;">Sở thích</label>
                                    <input type="text" placeholder="Nhập sở thích" id="sothich" class="form-control" name="sothich" value="{{ $user->sothich }}" required autofocus style="padding: 10px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s;">
                                    @if ($errors->has('sothich'))
                                        <span class="text-danger" style="font-size: 0.9em;">{{ $errors->first('sothich') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="facebook" style="font-weight: 600; margin-bottom: 8px; display: block;">Facebook</label>
                                    <input type="text" placeholder="Nhập Facebook" id="facebook" class="form-control" name="facebook" value="{{ $user->facebook }}" autofocus style="padding: 10px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s;">
                                    @if ($errors->has('facebook'))
                                        <span class="text-danger" style="font-size: 0.9em;">{{ $errors->first('facebook') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email_address" style="font-weight: 600; margin-bottom: 8px; display: block;">Email</label>
                                    <input type="email" placeholder="Nhập email" id="email_address" class="form-control" name="email" value="{{ $user->email }}" required autofocus style="padding: 10px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s;">
                                    @if ($errors->has('email'))
                                        <span class="text-danger" style="font-size: 0.9em;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" style="font-weight: 600; margin-bottom: 8px; display: block;">Password</label>
                                    <input type="password" placeholder="Nhập mật khẩu" id="password" class="form-control" name="password" style="padding: 10px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s;">
                                    @if ($errors->has('password'))
                                        <span class="text-danger" style="font-size: 0.9em;">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-block" style="width: 100%; padding: 12px; background-color: #007bff; color: white; border: none; border-radius: 6px; font-weight: 600; transition: background-color 0.3s;">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection