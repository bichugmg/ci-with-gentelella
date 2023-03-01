  <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">Add Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="post" action="add_student">
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Student</h3>

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div> -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <legend>Student Details</legend>
                <div class="col-md-6">
              <div class="form-group">
                
                  <label>Name of applicant:</label>
                  <input type="text" name="name" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>Date of Birth:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text"><i class="far fa-calendar-alt"></i></span> -->
                    </div>
                    <input type="date" onchange="ageCalculator();"  name="dob" id="dob" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                </div>
                <div class="form-group">
                  <label>Age:</label>
                  <input  type="text" id="age" name="age"  class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                    <label>Sex:</label>
                    <select  type="text" name="sex" class="form-control select2">
                      <option></option>
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                      <option value="Prefer not to say">Prefer not to say</option>
                  </select>
                  </div>
                <div class="form-group">
                  <label>Address:</label>
                  <input  type="text" name="address" class="form-control my-colorpicker1">
                </div>
                

               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Nationality:</label>
                  <input type="text" name="nationality" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>School:</label>
                  <input type="text" name="school" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>Class:</label>
                  <input type="text" name="class" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>Division:</label>
                  <input type="text" name="division" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                    <label for="fee">fee</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="number" name="fee" class="form-control my-colorpicker1" id="fee">
                      </div>
                    </div>
                  </div>
            </div>
        </div></div></div>
        <div class="card card-default">
        <div class="card-body">
                <legend>Parent Details</legend>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Name of Parent/Guardian:</label>
                  <input type="text" name="parent" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>Occupation:    </label>
                  <input type="text" name="occupation" class="form-control my-colorpicker1">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Mobile no.:</label>
                  <input type="text" id="mob" name="mob" class="form-control my-colorpicker1">
                </div>
                <div class="form-group">
                  <label>Whatsapp no.:</label>&ensp;&ensp;&emsp;<div class="icheck-primary d-inline">
                        <input type="checkbox" id="whats" onclick="fun1();"><label for="whatsapp">
                        Same as above</label>
                  <input type="text" id="whatsapp" name="whatsapp" class="form-control my-colorpicker1">
                </div>
            </div>
        </div>
    </div>
        </div></div>

        <div class="card card-default">
            <div class="card-body">
                <legend>Course Details</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course1</label>
                            <Select name="c1" class="form-control select2" required>
                                <option></option>
                                <option value="1">Classical Dance</option>
                                <option value="2">Classical Music</option>
                                <option value="3">Western Dance</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Guitar</option>
                                <option value="6">Violin</option>
                                <option value="7">Drums</option>
                                <option value="8">Arts & Crafts</option>
                                <option value="9">Others</option>

                            </Select>
                        </div>
                        <div class="form-group">
                            <label>Course3</label>
                            <Select name="c3" class="form-control select2">
                                <option></option>
                                <option value="1">Classical Dance</option>
                                <option value="2">Classical Music</option>
                                <option value="3">Western Dance</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Guitar</option>
                                <option value="6">Violin</option>
                                <option value="7">Drums</option>
                                <option value="8">Arts & Crafts</option>
                                <option value="9">Others</option>

                            </Select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course2</label>
                            <Select name="c2" class="form-control select2">
                                <option></option>
                                <option value="1">Classical Dance</option>
                                <option value="2">Classical Music</option>
                                <option value="3">Western Dance</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Guitar</option>
                                <option value="6">Violin</option>
                                <option value="7">Drums</option>
                                <option value="8">Arts & Crafts</option>
                                <option value="9">Others</option>
                            </Select>
                        </div>
                        <div class="form-group">
                            <label>Course4</label>
                            <Select name="c4" class="form-control select2">
                                <option></option>
                                <option value="1">Classical Dance</option>
                                <option value="2">Classical Music</option>
                                <option value="3">Western Dance</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Guitar</option>
                                <option value="6">Violin</option>
                                <option value="7">Drums</option>
                                <option value="8">Arts & Crafts</option>
                                <option value="9">Others</option>

                            </Select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label>Tranportation required :</label>
                            &ensp;<div class="icheck-primary d-inline">
                                <input type="checkbox" id="transport" name="trans" onchange="fun2();"><label for="transport">Yes</label>
            </div>
            <div class="form-group">
                <label>Pickup Point:</label>
                <input disabled type="text" name="point" id="point" class="form-control my-colorpicker1">
              </div>
            </div> <input type="submit"class="btn btn-info">
                    </div></div></div></div></div>

               
    
        <!-- SELECT2 EXAMPLE -->
        
        <!-- /.card -->

   
      <!-- /.container-fluid -->
    </section></form>
    <!-- /.content -->
  </div>
  <script>
    function fun1()
    {   
        var c=document.getElementById("whats");
        var w=document.getElementById("whatsapp");
        if(c.value=='on'){
            w.setAttribute("value",document.getElementById('mob').value);
            c.setAttribute("value","off");
        }
        else{
            w.setAttribute("value",'');
            c.setAttribute("value","on");
        }  
    }
    
    function fun2()
    {   
        var t=document.getElementById("transport");
        var p=document.getElementById("point");
        if(t.value=='on'){
            p.disabled=false;
        }
        else
            p.disabled=true;
    }

    function ageCalculator() {  
    var userinput = document.getElementById("dob").value;  
    var dob = new Date(userinput);  
    if(userinput==null || userinput=='') {  
      alert("**Choose a date please!");    
      return false;   
    } else {   
    var month_diff = Date.now() - dob.getTime();  
    var age_dt = new Date(month_diff);     
    var year = age_dt.getUTCFullYear();   
    var age = Math.abs(year - 1970);
    return document.getElementById("age").setAttribute("value",age); 
    }  
}  

  </script>