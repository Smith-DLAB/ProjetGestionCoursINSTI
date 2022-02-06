<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
        @yield('title')

        @yield('style_for_file_point')
        
        <link rel="icon" type="image/jpeg" sizes="292x350" href="assets/img/logo.jpg">
        <link rel="icon" type="image/jpeg" sizes="640x426" href="assets/img/profil.jpg">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="assets/css/animate-1.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/animate.min-1.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/aos-1.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                <div class="container-fluid d-flex flex-column p-0">
                    <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                        <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                        <div class="sidebar-brand-text mx-3"><span>insti</span></div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span>Tableau de Bord</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/profile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/homefiche"><i class="la la-ioxhost"></i><span>Déroulement des cours</span></a></li>
                    </ul>
                    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                </div>
            </nav>

            @yield('main')

        </div>

        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand {{ date('Y') }} </span></div>
            </div>
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/aos.js"></script></div>
            </div><a class="border rounded d-inline scroll-to-top" data-aos="fade-up" data-aos-duration="450" data-aos-delay="200" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init-1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="assets/js/aos-1.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/theme.js"></script>

    </body>
          
</html>