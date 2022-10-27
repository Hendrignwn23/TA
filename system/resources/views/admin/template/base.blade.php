<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('public')}}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{url('public')}}/admin/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{url('public')}}/admin/assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{url('public')}}/admin/assets/images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  @stack('style')
</head>
<body>
<script src="{{url('public')}}/admin/assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    @include('admin.template.sidebar')
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:../../partials/_navbar.html -->
      @include('admin.template.header')
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          @yield('content')
        </main>
        <!-- partial:../../partials/_footer.html -->
        @include('admin.template.footer')
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="{{url('public')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('public')}}/admin/assets/js/material.js"></script>
  <script src="{{url('public')}}/admin/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- data tabel -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#tabeladacari').DataTable({
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

@stack('script')

</body>
</html>