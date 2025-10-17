<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang di Dashboard!</h2>
    <p>Yello, <b>{{ $username }}</b> 👋</p>

    <a href="{{ route('login.show') }}">Logout</a>
</body>
</html>