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
                        <li class="breadcrumb-item active">Disenroll</li>
                    </ol>
                </div>
            </div>
            <!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-md-6"> 
        &emsp;&emsp; <button class="btn " onclick="window.location.href='<?php echo base_url().'app/enrollment';?>'" style="background: rgb(63, 65, 71);" ><i style="width: 55px;color: white;" class="fa fa-arrow-left"></i></button>
      </div></div><br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="post" action="disenroll" id="form_dsnrl">
                                <h3 class="card-title"> 
                                    <?php 
                                        foreach($student[0] as $key=>$val)
                                            if($key=='name')
                                                echo $val; 
                                            elseif($key=='std_id')
                                                echo '<input type="hidden" name ="std_id" value="'.$val.'">';
                                    ?> 
                                </h3>
                                <input type="hidden" name="course" id="dsnrl_crs">
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="col-md-3">
                                <select name="dsnrl" id="dsnrl" class="form-control">
                                    <option value="">Select course</option> 
                                        <?php 
                                            if(isset($data))
                                                foreach($data as $d)
                                                    echo "<option value='".$d['course']."'>".$d['course']."</option>";
                                        ?>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-3">
                                <button name="dsnrl" class="btn btn-danger">Disenroll</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- /.card-header
                <div class="card-body">