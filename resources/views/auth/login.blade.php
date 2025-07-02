<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="footer">
            <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>
