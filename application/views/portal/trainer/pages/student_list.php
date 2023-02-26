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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th> ID</th>
                      <th>Name</th>
                      <!-- <th>Action</th> -->
                   
                    </tr>
                    </thead>
                    <tbody>
                            <?php 
                                
                                foreach($data as $a)
                                    {
                                    // echo '<tr name="clickrow" id="'.$a['std_id'].'">';
                                    echo '<tr>';
                                      
                                      // echo '<tr onclick="window.location='."'#'".'>';
                                      foreach($a as $b)
                                        echo '<td>'.$b.'</td>';  
                                      echo '</tr>';
                                  }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                   <th> ID</th>
                      <th>Name</th>
                      <!-- <th>Action</th> -->

                    
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
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
    <form method="post" action="student_detail_trainer" name="f1"><input style="display: none;" name="std_id"></form>
    <!-- /.content-wrapper -->
