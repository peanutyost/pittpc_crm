      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/easy-markdown-editor/js/easymde.js"></script>
  <script src="vendor/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js"></script>
  <script src="vendor/moment/moment.min.js"></script>
  <script src="vendor/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src='vendor/fullcalendar/core/main.min.js'></script>
  <script src='vendor/fullcalendar/bootstrap/main.min.js'></script>
  <script src='vendor/fullcalendar/daygrid/main.min.js'></script>
  <script src='vendor/fullcalendar/timegrid/main.min.js'></script>
  <script src='vendor/fullcalendar/list/main.min.js'></script>
  <script src='vendor/bootstrap-select/js/bootstrap-select.min.js'></script>
  <script src='vendor/bootstrap-showpassword/bootstrap-show-password.min.js'></script>
  <script src='vendor/daterangepicker/daterangepicker.js'></script>
  <script src='vendor/Inputmask/dist/inputmask.min.js'></script>
  <script src='vendor/Inputmask/dist/bindings/inputmask.binding.js'></script>
  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Custom js-->
  <script src="js/app.js"></script>

</body>

</html>

<?php
  //Debug - Page Load time

  $time = microtime();
  $time = explode(' ', $time);
  $time = $time[1] + $time[0];
  $finish = $time;
  $total_time = round(($finish - $start), 4);
  echo 'Page generated in '.$total_time.' seconds.';
?>