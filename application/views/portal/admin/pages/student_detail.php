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
              <li class="breadcrumb-item active">Student Detail</li>
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
                  <h3 class="card-title"><?php echo $data[0]['name'];?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    
                    <tbody>
                            <?php 
                                
                                foreach($data[0] as $key=>$value)
                                    echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                                
                                    
                            ?>
                    </tfoot>
                  </table>
                  <div class="row">
                <legend>Courses</legend>
                <div class="col-md-6">
              <div class="form-group">
                <?php
                echo '<ul>';
              foreach($enrollment as $a)
                foreach($a as $key=>$value)
                echo '<li>'.$value.'</li>';
              ?></ul>
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
    <form method="post" action="student_detail" name="f1"><input style="display: none;" name="std_id"></form>
    <!-- /.content-wrapper -->
