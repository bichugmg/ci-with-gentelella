<!-- page content -->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Referral</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>INTERVAL™<small>* Indicates Mandatory Fields</small></h2><div class="pull-right">
                              <a href="referral_status"><button type="button" class="btn btn-success btn-sm">View Referrals</button></a>
                            </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" autocomplete="off">
                          
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="referee_name">Name of Student <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="referee_name" name="referee_name" required="required" class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="class">Class <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="class" class="form-control" required>
                                <option value="">-- Select Class --</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
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
                                <option value="Others">Others</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_name">Name of Parent <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="parent_name" name="parent_name" required="required" class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="referee_mobile_no">Mobile No. <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" id="referee_mobile_no" name="referee_mobile_no" required="required" class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="district_id">District <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="district_id" name="district_id" class="form-control" required>
                                <option value="">-- Select District --</option><?php 
                                foreach ($districts as $district) {
                                        
                                        echo "<option value='$district->district_id'>$district->district_name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="branch_id">Branch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="branch_id" name="branch_id" class="form-control" required>
                                <option value="">-- Select Branch --</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="locality">Locality <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="locality" name="locality" required="required" class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="course_id">Course Prefered <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select id="course_id" name="course_id" class="form-control" required>
                                <option value="">-- Select Course --</option>
                                <?php 
                                foreach ($courses as $course) {
                                        echo "<option value='$course->course_available_id'>$course->course_name</option>";
                                    }
                                ?>
                            </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="referrer_note">Note <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea name="referrer_note" id="referrer_note" class="form-control" placeholder="Enter Your Comments about the Student."></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <br>
                          <center><button class="btn btn-dark" type="reset">Reset</button>
                          <button type="submit" class="btn btn-info"> Save <i class='fa fa-floppy-o'></i></button>
                        </center>
                        </div>
                      </div>

                    </form>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /page content -->
        
        

<script>

$('#district_id').change(function() {
             var dis = $(this).val();
             $.ajax({
                        url:"<?php echo base_url();?>trainer/fetch_branches",
                        method:"POST",
                        data:{district:dis},
                        success:function(data)
                        {
                            $("#branch_id").html(data); 
                        }
             });
            });
</script>