<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Document</title>
</head>

<body>
    @extends('dashboard')
    
    @section('content')
        <div class="header">
            <a href="{{ url('/') }}">Home</a> | <a href="{{ url('/login') }}">Đăng xuất</a>
        </div>

        <div class="container-list">
            <h2>Danh sách user</h2>
            <table>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Sở Thích</th>
                    <th>Facebook</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->sothich }}</td>
                        <td>{{ $user->facebook }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="actions">
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="footer">
            Lập trình web ©01/2024
        </div>
    @endsection

</body>

</html>