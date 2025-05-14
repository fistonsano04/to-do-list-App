<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Login Page</title>
</head>


<body>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    @session('error')
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endsession
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login.user') }}" method="POST">
            @csrf
            <div class="box">
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
            </div>
            <button type="submit">Login</button>
            <div>
                <a href="{{ route('register') }}">If you don't have an account? Sign Up</a>
            </div>

        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>

</html>
