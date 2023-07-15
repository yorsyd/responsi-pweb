<html>
    <head>
        <link rel="stylesheet" href="styleLogin.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form " action="prosesLogin.php" >
                    <h2>Verifikasi</h2>
                    <p>Hanya Admin yang Berhak Masuk</p>
                    <input type="text" required placeholder="Username" id="user" name="user">
                    <input type="password" required placeholder="Password" id="pw" name="pw">
                    <button type="submit" name="cek">Verifikasi</button>
                </form>
            </div>
        </div>
    </body>
</html>