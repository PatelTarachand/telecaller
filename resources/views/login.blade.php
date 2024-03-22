<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="/../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="/../assets/images/icon/telecaller.jpg" width="80px" height="80px" alt="CoolAdmin">
                            </a>

                            @include('flash_data')
                            @if ($errors -> any())
                                <ul class="bg-warning">
                                    @foreach ($errors -> all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                        </div>
                        <div class="login-form">
                            <form action="{{ Route('authenticate') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{ Route('register') }}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/../assets/vendor/slick/slick.min.js">
    </script>
    <script src="/../assets/vendor/wow/wow.min.js"></script>
    <script src="/../assets/vendor/animsition/animsition.min.js"></script>
    <script src="/../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->