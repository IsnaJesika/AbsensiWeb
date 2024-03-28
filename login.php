<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Presensi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #47a447;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            max-width: 400px;
            width: 90%;
        }

        h2 {
            color: #47a447;
            margin-bottom: 20px;
        }

        label,
        input,
        select,
        button {
            display: block;
            margin-bottom: 15px;
            width: calc(100% - 30px);
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #47a447;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #398439;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="user_type">Select user type:</label>
            <select name="user_type" id="user_type">
                <option value="mahasiswa">Mahasiswa</option>
                <option value="dosen">Dosen</option>
            </select>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
