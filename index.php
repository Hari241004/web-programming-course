<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 30px;
            color: #333;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: 0.3s;
        }
        .login-container input:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.3);
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-container button:hover {
            background-color: #2980b9;
        }

        /* Animasi input field */
        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .login-container input, .login-container button {
            animation: slide-in 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Email" required />
            <input type="password" name="password" id="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
