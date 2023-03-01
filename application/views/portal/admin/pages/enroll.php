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
              <li class="breadcrumb-item"><a href="<?php echo base_url('app/home'); ?>">Home </a></li>
              <li class="breadcrumb-item active">Enroll Student</li>
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
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th> ID</th>
                      <th>Name</th>
                      <th>Action</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                            <?php 
                                echo '<tr>';
                                foreach($data as $a)
                                    {
                                        foreach($a as $b)
                                        echo '<td>'.$b.'</td>';
                                   echo '<td><button class="btn btn-info" name="enroll" id="'.$a['std_id'].'"> Enroll</button>&emsp;';
                                   echo '<button class="btn btn-danger" name="disenroll" id="'.$a['std_id'].'"> Disenroll</button></td>';
                                    
                                    echo '</tr>';}
                                    ?>       
                    </tbody>
                    <tfoot>
                    <tr>
                      <th> ID</th>
                      <th>Name</th>
                      <th>Action</th>
                    
                    </tr>
                    </tfoot>
                  </table>
    <form method="post" action="new_enrollment" name="f2"><input style="display: none;" name="std_id"></form>

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
    <form method="post" action="disenrollment" name="f3"><input style="display: none;" name="sid"></form>

    <!-- /.content-wrapper -->
