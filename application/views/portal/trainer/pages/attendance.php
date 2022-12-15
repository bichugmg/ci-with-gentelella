<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1><b>Add Student</b></h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              
          
              <div class="card">
                <!-- <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div> -->
                <!-- /.card-header -->
                
                <div class="card-body">
                <form method="post" action="upload_attendance" name="form_at">
                  <table id="at_sheet" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th> ID</th>
                      <th>Name</th>
                      <th></th>
                   
                    </tr>
                    </thead>
                    <tbody>
                        
                            <?php 
                                
                                foreach($data as $a)
                                    {
                                    echo '<tr >';
                                      
                                      // echo '<tr onclick="window.location='."'#'".'>';
                                      foreach($a as $b)
                                        echo '<td>'.$b.'</td>';  
                                      echo '<td><input class="atcheck" type="checkbox" name="'.$a["std_id"].'"></td></tr>';
                                  }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                   <th> ID</th>
                      <th>Name</th>
                      <th></th>

                    
                    </tr>
                    </tfoot>
                  </table>
                  </form>
                                <!-- </form> -->
                <!-- /.card-body -->
              <section><div class="row">
              <button  onclick="checkedboxes()" class="btn btn-info">Submit</button>
                                </div></section></div></div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- <form method="post" action="student_detail" name="f1"><input style="display: none;" name="std_id"></form> -->
    <!-- /.content-wrapper -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Today's Attendace</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input class=form-control id="count" Disabled>  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info" onclick="formsub();">Submit</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>