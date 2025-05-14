<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        transition: all 0.3s ease;
    }

    body {
        background: #f0f0f0;
        font-family: 'poppins', sans-serif;
    }

    .container {
        background: radial-gradient(#2f24d1, #111994);
        width: 50%;
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 100px auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .container h1 {
        text-align: center;
        margin-bottom: 20px;
        width: 100%;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        border-radius: 10px;
        padding: 10px;
    }

    .container form {
        display: flex;
        flex-direction: column;
        gap: 10px;

    }
</style>

<body>
    <div class="container">
        <h1>Create Account</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
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
            <button type="submit">Register</button>
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
