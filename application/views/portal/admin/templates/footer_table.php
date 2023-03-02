<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  
    <!-- Control Sidebebar -->
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
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
    });
    $(function () {
      $("#ex1").DataTable({
      "ordering": false,
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["excel", "pdf", "print"]
      }).buttons().container().appendTo('#ex1_wrapper .col-md-6:eq(0)');
   
    });
    $(function () {
      $("#ex3").DataTable({
      "ordering": false,
        "responsive": true, "lengthChange": false, "autoWidth": false,"searching":false, "paging":false, 
      }).buttons().container().appendTo('#ex3_wrapper .col-md-6:eq(0)');
   
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

    $('button[name="d1"]').click(function(){
      var id = $(this).attr("id");
      $('#filename').val(id);
      $('#modal-secondary').modal("show");
    });
    $('button[name="dsnrl"]').click(function(){
      var id = $('input[name="std_id"]').attr("value");
      var course = $('#dsnrl').find(":selected").val();
      alert("Successfuly disenrolled from "+course);
      $('#dsnrl_crs').val(course);
      $('#form_dsnrl').submit();

      // $('#filename').val(id);
      // $('#modal-secondary').modal("show");
    })
    function editStudent(id)
    {
      $('input[id="edit_id"]').val(id);
      $('form[id="editId"]').submit();
    }
    function updateStudent()
    {
      $('form[name="updatestudent"]').submit();
    }
    function search()
     {
      var month=document.getElementById("month").value;
      var year=document.getElementById("year").value;
      $('input[id="month"]').val(month);
      $('input[id="year"]').val(year);
      $('form[name="f4"]').submit();
     }
  </script>
  </body>
  </html>