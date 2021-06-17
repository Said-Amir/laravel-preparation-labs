<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bikin Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("vendor/aos/aos.css") }} rel="stylesheet">
  <link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
  <link href={{ asset("vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
  <link href={{ asset("vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
  <link href={{ asset("vendor/glightbox/css/glightbox.min.css") }} rel="stylesheet">
  <link href={{ asset("vendor/swiper/swiper-bundle.min.css") }} rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Template Main CSS File -->
  <link href={{ asset("css/style.css") }} rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin - v4.3.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div id="header" class="p-0">
        <div class="navbar w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left pt-5" style="width:200px;" id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">&times;</button>
            <a style="display: inline-block!important;" href="/" class=" w-100 logo ps-4 pb-4 border-bottom">Bikin</a>
            <a style="display: inline-block!important;" href="/dashboard" class=" w-100 mt-2 nav-link">Dashboard</a>
            <a style="display: inline-block!important;" href={{ route('home.index') }} class=" w-100 nav-link">Home</a>
            <a style="display: inline-block!important;" href={{ route('about.index') }} class=" w-100 nav-link pb-2">About</a>
            <a style="display: inline-block!important;" class="getstarted mt-2 py-1 px-2 scrollto" href="/">Logout</a>
        </div>
    </div>
      
    <div class="w3-main" style="margin-left:200px">
    <div class="">
    <button class="w3-button w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    
    @yield('content')
        
    </div>
    
    <script>
    function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    }
    </script>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src={{ asset("vendor/aos/aos.js") }}></script>
    <script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("vendor/glightbox/js/glightbox.min.js") }}></script>
    <script src={{ asset("vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
    <script src={{ asset("vendor/php-email-form/validate.js") }}></script>
    <script src={{ asset("vendor/swiper/swiper-bundle.min.js") }}></script>
  
    <!-- Template Main JS File -->
    <script src={{ asset("js/main.js") }}></script>
  
</body>
  
</html>