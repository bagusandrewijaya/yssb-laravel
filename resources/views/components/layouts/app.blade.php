<!DOCTYPE html>
<html lang="en">
<head>
 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
 <title>Youth Tiger Soccer School - Sekolah Sepak Bola Terbaik untuk Anak Muda</title>
 <meta name="description" content="Youth Tiger Soccer School adalah sekolah sepak bola terbaik untuk mengembangkan bakat dan potensi anak muda dalam olahraga sepak bola. Bergabunglah dengan kami untuk meraih prestasi.">
 <meta name="keywords" content="sekolah sepak bola, youth soccer, pelatihan sepak bola, akademi sepak bola, pembinaan sepak bola">
 <meta name="author" content="Youth Tiger Soccer School">

 <!-- Mobile Specific Metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-utilities.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap-grid.rtl.min.css">

    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Carousel -->
    <link rel="stylesheet" type="text/css" href="stylesheets/owl.carousel.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Wow JS -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.min.css">

    <link rel="stylesheet" type="text/css" href="stylesheets/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="stylesheets/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="stylesheets/map.min.css">

    <!-- Favicon and touch icons  -->
    <link href="images/icon/favicon.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="images/icon/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="images/icon/favicon.png" rel="shortcut icon">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    {{ $slot }}
    <!-- Request permission for Firebase -->
    <script>
        // Request permission to use Firebase services
        Notification.requestPermission().then((permission) => {
            if (permission === "granted") {
                console.log("Permission granted for notifications.");
            } else {
                console.log("Permission denied for notifications.");
            }
        });
    </script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
     <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/wow.min.js"></script>
    <script type="text/javascript" src="javascript/count-down.js"></script>
    <script type="text/javascript" src="javascript/magnific-popup.min.js"></script>
    <script type="text/javascript" src="javascript/map.min.js"></script>
    <script type="text/javascript" src="javascript/map.js"></script>
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

<script>
    if ('serviceWorker' in navigator) {
      
      window.addEventListener('load', function (ev) {
        navigator.serviceWorker.register('firebase-messaging-sw.js')
         .then((registration) => {
           console.log('Service Worker registered with scope:', registration.scope);
         }).catch((err) => {
           console.log('Service Worker registration failed:', err);
         });
        // Wait for registration to finish before dropping the <script> tag.
        // Otherwise, the browser will load the script multiple times,
        // potentially different versions.
        var serviceWorkerUrl = 'flutter_service_worker.js?v=' + serviceWorkerVersion;

        _flutter.loader.loadEntrypoint({
          serviceWorker: {
            serviceWorkerVersion: serviceWorkerVersion,
          },
          onEntrypointLoaded: function (engineInitializer) {
            engineInitializer.initializeEngine().then(function (appRunner) {
              appRunner.runApp();
            });
          }
        });
      });
    }
  </script>

</body>
</html>