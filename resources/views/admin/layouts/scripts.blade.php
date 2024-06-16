  <!-- Vendor JS Files -->
  <script src="{{asset('dashboard')}}/assets/js/jQuery.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('dashboard')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('dashboard')}}/assets/js/jQuery-validation.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('dashboard')}}/assets/js/main.js"></script>
  <script src="{{ asset('dashboard') }}/assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('dashboard/assets/vendor/select2-4.1.0-rc.0/dist/js/select2.full.min.js') }}"></script>
  <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@include('sweetalert::alert')
@yield('js')
