<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Form Login</h2>

    @if (session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
