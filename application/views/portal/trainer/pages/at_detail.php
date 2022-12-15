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
                <div class="card-header">
                  <h3 class="card-title"><?php 
                  print_r( $data['name'][0]['name']);
                  if(isset($month)&&isset($year))
                  echo "  &emsp;     |  &emsp;".$month." - ".$year;
                  ?></h3>
                </div>
                <!-- /.card-header -->
                
                <div class="card-body">
              
                  <table id="example1" class="table table-bordered table-striped">
                    <div class= "row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <select class="form-control" name="month" id="month">
                            <option>Select Month </option>
                            <option value="1">January </option>
                            <option value="2">February </option>
                            <option value="3">March  </option>
                            <option value="4">April </option>
                            <option value="5">May </option>
                            <option value="6">June </option>
                            <option value="7">July </option>
                            <option value="8">August </option>
                            <option value="9">September </option>
                            <option value="10">October </option>
                            <option value="11">November </option>
                            <option value="12">December </option>

                        </select></div>
                        <div class="col-sm-2">
                        <select class="form-control" name="year" id="year">
                            <option>Select Year</option>
                            <option value="2022">2022    </option>
                            <option value="2023">2023 </option>

                        </select></div>
                        <div class="col-sm-2"><button class="btn btn-info" onclick="search()" >Search</button></div>
                        <br><br><br>
                    
                    <div class="row">
                    <thead>
                    <tr>
                      <th> Day</th>
                      <th>Date</th>
                      <th>Month</th>
                      <th>Year</th>

                      
                   
                    </tr>
                    </thead>
                    <tbody>
                        
                            <?php 
                                
                                foreach($data['res'] as $a)
                                    {
                                    echo '<tr>';
                                      
                                      // echo '<tr onclick="window.location='."'#'".'>';
                                      foreach($a as $key=>$value)
                                      {
                                        if($key=="month")
                                        {
                                          switch($value)
                                          {
                                            case '1': echo '<td>January</td>';break;
                                            case '2': echo '<td>February</td>';break;
                                            case '3': echo '<td>March</td>';break;
                                            case '4': echo '<td>April</td>';break;
                                            case '5': echo '<td>May</td>';break;
                                            case '6': echo '<td>June</td>';break;
                                            case '7': echo '<td>July</td>';break;
                                            case '8': echo '<td>August</td>';break;
                                            case '9': echo '<td>September</td>';break;
                                            case '10': echo '<td>October</td>';break;
                                            case '11': echo '<td>November</td>';break;
                                            case '12': echo '<td>December</td>';break;
                                          }
                                        }
                                        else
                                          echo '<td>'.$value.'</td>';  
                                      }
                                        echo '</tr>';
                                  }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                   <th> Day</th>
                      <th>Date</th>
                      <th>Month</th>
                      <th>Year</th>
                     

                    
                    </tr>
                    </tfoot>
                                </div>
                  </table>
        
                                <!-- </form> -->
                <!-- /.card-body -->
              </div></div>
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
    <form method="post" action="at_detail" name="f4">
    <input style="display: none;" name="std_id" id="std_id" value="<?php echo $std_id;?>">
    <input style="display: none;" name="month" id="s_month">
    <input style="display: none;" name="year" id="s_year" >
    </form>
