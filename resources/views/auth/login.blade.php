<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Google</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group label {
            font-size: 14px;
            color: #555;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 5px;
        }
        .login-btn {
            display: inline-block;
            background: #4285f4;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .login-btn:hover {
            background: #357ae8;
        }
        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border: 1px solid #ddd;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            color: #333;
            text-decoration: none;
        }
        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }
        .google-btn:hover {
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Welcome! Please Login</h2>
        <!-- Username Field -->
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter your username" required>
        </div>
        <!-- Password Field -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>
        </div>
        <a href="#" class="login-btn" onclick="handleLogin()">Login</a>
        <a href="{{ url('/auth/google') }}" class="google-btn">
            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo">
            Sign Up with Google
        </a>
    </div>

    <script>
        function handleLogin() {
            alert('Login functionality needs to be implemented.');
        }
    </script>
</body>
</html>
