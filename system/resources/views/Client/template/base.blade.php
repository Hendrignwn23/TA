<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
  <link href="{{url('public')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('Client.template.header')

  <!-- ======= Hero Section ======= -->

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('Client.template.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
  <script src="{{url('public')}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{url('public')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public')}}/assets/js/main.js"></script>

  <!-- data tabel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#dataTable').DataTable({
      oLanguage: {
        sSearch: "Pencarian",
        sInfoEmpty: "Data Belum Tersedia",
        sInfo: "Menampilkan _PAGE_ dari _PAGES_ halaman",
        sEmptyTable: "Data Belum Tersedia",
        sLengthMenu: "Tampilkan _MENU_ Baris",
        oPaginate: {
          "sFirst": "Pertama",
          "sPrevious": "Sebelumnya",
          "sNext": "Selanjutnya",
          "sLast": "Terakhir",
        },
      }
    });
    });
  </script>

</body>

</html>