<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost/adminc/asset/jquery.js"></script>
    <link rel="stylesheet" href="http://localhost/adminc/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/adminc/asset/all.css">
    <link rel="stylesheet" href="http://localhost/adminc/asset/fontawesome/css/all.min.css">
    <title>Karantina</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <h1 class="text-white">Hello Admin</h1>
            </div>
            <div class="col-md-8">
                <div class="row" style="margin-top:120px;box-shadow:-1px 1px 50px 10px black;border-radius:90px">
                    <div class="col-md-6 mt-3 ml-5">
                        <form action="proses.php" class="pb-5" method="post">
                            <ul>
                                <a href="#" style="border-bottom:3px solid #2ebf91;padding:10px;color:#2ebf91">Sign in</a>
                                <a class="text-white" disabled> / </a>
                                <a href="form-regis.php"> Sign Up</a>
                            </ul>

                            <div class="input">
                                <div>
                                    <div class="i">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <h5>Username</h5>
                                    <input type="email" class=" input" name="user">

                                </div>
                            </div>
                            <div class="input">

                                <div>
                                    <div class="i">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <h5>Password</h5>
                                    <input type="password" class="input" name="password">
                                </div>
                            </div>


                            <a href="">
                                <button class="btn btn-info" type="submit" name="signin">SIGN UP</button>
                            </a>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="http://localhost/covid/asset/img/doctor.svg" alt="">
                    </div>


                </div>
                <!-- close -->
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
    <script src="login.js"></script>
</body>

</html>