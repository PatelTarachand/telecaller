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
    <title>
        @yield('title')
    </title>

    <!-- Fontfaces CSS-->
    <link href="/../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/../assets/images/icon/telecaller.jpg" height="80px" width="80px" alt="Telecaller" />
                </a>
                <h4 class="mx-4">Telecaller</h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            {{-- <i class="far fa-check-square"></i> --}}
                            <a  href="{{ Route('dashboard') }}">
                                <i class="fa-solid fa-circle-dot"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ Route('customer.create') }}">
                                <i class="fa-solid fa-circle-dot"></i>Customer Forms</a>
                        </li>
                        <li>
                            <a href="{{ Route('customer.index') }}">
                                <i class="fa-solid fa-circle-dot"></i>Customer Details</a>
                        </li>
                        <li>
                            <a href="{{ Route('area.create') }}">
                                <i class="fa-solid fa-circle-dot"></i>Area </a>
                        </li>
                        <li>
                            <a href="{{ Route('district.create') }}">
                                <i class="fa-solid fa-circle-dot"></i>District </a>
                        </li>
                        <li>
                            <a href="{{ Route('custCate.create') }}"> 
                            <i class="fa-solid fa-circle-dot"></i>Customer Category</a>
                        </li>
                        <li>
                            <a href="{{ Route('custType.create') }}">
                                <i class="fa-solid fa-circle-dot"></i>Customer Type Forms</a>
                        </li>
                        <li>
                            <a href="{{ Route('allCall.show') }}">
                                <i class="fa-solid fa-circle-dot"></i>All Call Details</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="row justify-content-end">
                    <div class="m-4">
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ session('name') }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                        <div class="content">
                                            <div class="name">
                                                <a href="#">{{ session('email') }}</a>
                                            </div>
                                        </div>
                                        <a href="{{ Route('logout') }}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>

            <!-- footer -->
            <footer>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © {{ date('d/M/Y') }} | All rights reserved. Template by Kamlesh Patel</a>.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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


    <!-- JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $('#myDataTable').DataTable();
        /*
        $(document).ready(function() {
            $('#myDataTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
        */
    </script>

    <!-- Main JS-->
    <script src="/../assets/js/main.js"></script>

    @yield('script')

    </body>

    </html>
    <!-- end document-->
