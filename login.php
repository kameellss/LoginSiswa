<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFFFF; /* Latar belakang putih */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        /* Background Batik */
        .background-batik {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('./assets/Songket.jpg'); /* URL gambar motif batik */
            background-repeat: repeat;
            background-size: 25%; /* Ukuran pola */
            opacity: 0.1; /* Transparansi agar tetap lembut */
            z-index: -1;
        }

        .login-card {
            background-color: #EEEEEE; /* Warna card abu terang */
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 350px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-card h3 {
            font-size: 24px;
            color: #201E43; /* Warna teks utama */
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #508C9B; /* Warna border input */
            border-radius: 8px;
            background-color: #FFFFFF;
            color: #201E43;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #134B70;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #134B70; /* Warna tombol */
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #508C9B; /* Warna hover tombol */
        }
    </style>
</head>
<body>
    <!-- Background Batik -->
    <div class="background-batik"></div>

    <!-- Form Login -->
    <div class="login-card">
        <h3>Login</h3>
        <form id="loginForm" action="main_page.php" method="POST">
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>