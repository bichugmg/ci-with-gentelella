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
              <li class="breadcrumb-item active">Edit Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7"> 
        &emsp;&emsp; <button class="btn " onclick="window.location.href='<?php echo base_url().'app/studentList';?>'" style="background: rgb(63, 65, 71);" ><i style="width: 55px;color: white;" class="fa fa-arrow-left"></i></button>
      </div>
      <div class="col-md-3"></div>

          <!-- <div class="col-sm-1">
              <button class="btn " id="update_std" onclick="updateStudent()" style="background: rgb(63, 65, 71);" ><i style="width: 65px;color: white;" class="fa fa-save">&nbsp;&nbsp; Save</i></button>
          </div> -->
    </div>
  </div>
    <br>
    <section class="content">
      
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
              
  
              <div class="card" id="printable">
                
                <!-- /.card-header -->
                <div class="card-body">
                  <form method="post" action="update_student" name="updatestudent">

                  <table id="ex3" class="table table-bordered table-striped">
                    <thead><tr><td></td><td>
                      </td></tr>
                    </thead>
                   
                    <tbody>
                            <?php 
                                
                                foreach($data[0] as $key=>$value)
                                    {
                                       if($key=="std_id")
                                          echo '<tr><td>'.$key.'</td><td><input name="'.$key.'" readonly class="form-control" value="'.$value.'"></td></tr>';
                                       else
                                          echo '<tr><td>'.$key.'</td><td><input name="'.$key.'" class="form-control" value="'.$value.'"></td></tr>';
                                    }
                                    
                            ?>
                            </tbody>
                        
                            <tfoot></tfoot>
                  
                  </table>
              <button class="btn" type="submit" id="update_std"  style="background: rgb(63, 65, 71);" ><i style="width: 65px;color: white;" class="fa fa-save">&nbsp;&nbsp; Save</i></button>
                  
                  </form>
                  
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
