<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Create Account</title>
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
        <h1>Create Account</h1>
        <form action="{{ route('register.user') }}" method="POST">
            @csrf
            <div class="box">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Confirm:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit">Register</button><br> <br>
                <div>
                    <a href="{{ route('login') }}">Already have an account? Login</a>
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
