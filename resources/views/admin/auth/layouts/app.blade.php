<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin-assets')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('admin-assets')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin-assets')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('admin-assets')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin-assets')}}/assets/css/style.css" rel="stylesheet">
@yield('css')
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@yield('content')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin-assets/assets/js/jQuery.min.js') }}"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/quill/quill.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('admin-assets')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('admin-assets/assets/js/jQuery-validation.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('admin-assets')}}/assets/js/main.js"></script>
@yield('js')
</body>

</html>