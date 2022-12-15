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
                  <h3 class="card-title">Enrolled Courses</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ol>
                    <?php 
                    foreach($data as $a)
                        foreach($a as $b)
                        echo '<li>'.$b.'</li>';
                    ?>
                    </ol>
                </div></div></div></div>


</div>
<form method="post" action="newEnroll">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Enroll New Course</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                        <div class="form-group"><label>Course 1</label>
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
    
            </Select></div></div>
            <div class="col-md-6">
                        <div class="form-group"><label>Course 2</label>
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
    
            </Select></div></div>
            <div class="col-md-6">
                        <div class="form-group"><label>Course 3</label>
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
    
            </Select></div></div>
            <div class="col-md-6">
                        <div class="form-group"><label>Course 4</label>
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
    
            </Select></div></div>
          <input style="display: none;" name="std_id" value=<?php echo '"'.$std_id.'"';?>>
       </div><br><br>
            <div class="row">
              <div class="col-md-6">
              <button class="btn btn-info"> Submit</button>
            </div></div>
        </div></div></div></div>


</div></form></section></div>