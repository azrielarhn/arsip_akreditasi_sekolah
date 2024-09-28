<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="bg-primary bg-gradient-navy">
    <div class="d-flex flex-column min-vh-100 justify-content-center">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
            </div>
            <div class="content-error">
                <?php
                // pesan notifikasi

                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                    } else if ($_GET['alert'] == "logout") {
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                    } else if ($_GET['alert'] == "belum_login") {
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 mx-auto bg-white rounded shadow">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="m-5 text-center">
                                        <h1>Welcome!</h1>
                                    </div>
                                    <div>
                                        <form action="periksa_login.php" method="POST" id="loginForm">
                                            <form class="m-5">
                                                <div class="mb-3">
                                                    <label class="control-label" for="username">Username</label>
                                                    <input type="text" placeholder="username" title="Please enter you username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                                                </div>
                                                <form class="m-5">
                                                    <div class="mb-3">
                                                        <label class="control-label" for="password">Password</label>
                                                        <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                                                    </div>
                                                    <form class="m-5">
                                                        <div class="mb-3">
                                                            <label class="control-label" for="password">Hak Akses</label>
                                                            <select class="form-control" name="akses">
                                                                <option value="admin">Admin</option>
                                                                <option value="petugas">Petugas</option>
                                                            </select>
                                                        </div>
                                                        <form class="m-5">
                                                            <div class="mb-3">
                                                                <input type="submit" class="form-control btn btn-primary mt-3" value="Login">
                                                        </form>
                                                    </form>
                                                </form>
                                            </form>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="./gambar/login.svg" alt="login" class="img-fluid p-5" />
                                </div>
                            </div>
                        </div>

                        <a href="index.php">Kembali</a>
                        <br>
                        <div class="text-center login-footer">
                            <p class="text-muted">Copyright © <?php echo date('Y') ?>.SMP Muhammadiyah 29. All Rights Reserved</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>