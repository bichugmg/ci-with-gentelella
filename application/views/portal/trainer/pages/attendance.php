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
                  <select name="date" id="date" class="form-control select2" required>
                    <option value="Select Date" >Date</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>

                  <select name="day" id="day" required class="form-control select2" >
                    <option value="Select Day">Day</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                  </select>
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
             <label for="daymod">Day :</label> <input class=form-control id="daymod" name="daymod" Disabled>  
             <label for="daymod">Date :</label><input class=form-control id="datemod" name="datemod" Disabled>  
             <label for="count">Total :</label><input class=form-control id="count" name="count" Disabled>  
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