<footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- <script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script> -->

 <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url();?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
 <script src="<?php echo base_url();?>/assets/plugins/toastr/toastr.min.js"></script>
 <script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
 <script src="<?php echo base_url();?>/assets/dist/js/demo.js"></script>

  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>/assets/dist/js/demo.js"></script>
  <!-- Page spe<?php echo base_url();?>assets/script -->
  <script>
    $(function () {
      $("#example1").DataTable({
      "ordering": false,
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
    });
    $(function () {
      $("#at_sheet").DataTable({
      "ordering": false,
        "responsive": true, "lengthChange": false, "autoWidth": false,"paginate":false
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
    });
    $('tr[name="clickrow"]').click(function() {
      var id = $(this).attr("id");
      $('input[name="std_id"]').val(id);
      $('form[name="f1"]').submit();
    });
    $('button[name="enroll"]').click(function() {
      var id = $(this).attr("id");
      $('input[name="std_id"]').val(id);
      $('form[name="f2"]').submit();
    });
    $('button[name="disenroll"]').click(function() {
      var id = $(this).attr("id");
      $('input[name="sid"]').val(id);
      $('form[name="f3"]').submit();
    });
    function checkedboxes()
      {
       var inputElems = document.getElementsByClassName("atcheck")
        count = 0;

        for (var i=0; i<inputElems.length; i++) {       
           if (inputElems[i].checked == true){
              count++;  
           }
        }
        document.getElementById('count').value=count;
        // $("#modal-default").html('hai');
        $("#modal-default").modal();
     }
     function formsub()
     {
      $('form[name="form_at"]').submit();
     }
     function search()
     {
      var month=document.getElementById("month").value;
      var year=document.getElementById("year").value;
      $('input[id="s_month"]').val(month);
      $('input[id="s_year"]').val(year);
      $('form[name="f4"]').submit();
     }
  </script>
  </body>