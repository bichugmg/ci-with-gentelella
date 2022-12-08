<!-- page content -->
<script>
    function validate_form(){
                var phone=document.getElementById('phone');
                var parent_mob=document.getElementById('parent_mob');
                var pincode=document.getElementById('pincode');
                var year_of_pass=document.getElementById('year_of_pass');
                
                
            if(phone.value.length!=10)
            {
               alert("Enter Your 10 Digit Mobile No.");
               document.getElementById("phone").focus();
                return false; 
            }
            else if(parent_mob.value.length!=10)
            {
               alert("Enter 10 Digit Mobile No. of Parent/Guardian");
               document.getElementById("parent_mob").focus();
                return false; 
            }
            else if(pincode.value.length!=6)
            {
               alert("Enter 6 Digit Pincode");
               document.getElementById("pincode").focus();
                return false; 
            }
            else if(year_of_pass.value < 1990 || year_of_pass.value > 2030)
            {
               alert("Enter Year between 1990 and 2030");
               document.getElementById("year_of_pass").focus();
                return false; 
            } 
            else {
                return true;
                }
    }
    
    
</script>
<style type="text/css">
    input {
            text-transform : uppercase;
    }
</style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee Profile</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>INTERVAL™<small>* Indicates Mandatory Fields</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" method="post" action="profile_data" enctype="multipart/form-data" onsubmit="return validate_form(this)" autocomplete="off">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="name" name="name" required="required" class="form-control" value="<?php echo $profile['data']->name; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="sex">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <select name="sex" class="form-control" required>
                                <option value=""> -- Select Gender --</option>
                                <option value="Male" <?php if($profile['data']->sex=="Male") echo "selected='selected'"; ?> >Male</option>
                                <option value="Female" <?php if($profile['data']->sex=="Female") echo "selected='selected'"; ?> >Female</option>
                            </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="dob" name="dob" class="date-picker form-control" required="required" type="date" value="<?php echo $profile['data']->dob; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="bloodgroup">Blood Group <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                            <select name="bloodgroup" id="bloodgroup" class="form-control" required>
                                <option value=""> -- Select Blood Group --</option>
                                <option value="A+ve" <?php if($profile['data']->bloodgroup=="A+ve") echo "selected='selected'"; ?> >A+ve</option>
                                <option value="A-ve" <?php if($profile['data']->bloodgroup=="A-ve") echo "selected='selected'"; ?> >A-ve</option>
                                <option value="B+ve" <?php if($profile['data']->bloodgroup=="B+ve") echo "selected='selected'"; ?> >B+ve</option>
                                <option value="B-ve" <?php if($profile['data']->bloodgroup=="B-ve") echo "selected='selected'"; ?> >B-ve</option>
                                <option value="AB+ve" <?php if($profile['data']->bloodgroup=="AB+ve") echo "selected='selected'"; ?> >AB+ve</option>
                                <option value="AB-ve" <?php if($profile['data']->bloodgroup=="AB-ve") echo "selected='selected'"; ?> >AB-ve</option>
                                <option value="O+ve" <?php if($profile['data']->bloodgroup=="O+ve") echo "selected='selected'"; ?> >O+ve</option>
                                <option value="O-ve" <?php if($profile['data']->bloodgroup=="O-ve") echo "selected='selected'"; ?> >O-ve</option>
                            </select>
                            </div>
                          </div>
                          <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="marital_status">Marital Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="marital_status" class="form-control" required>
                                <option value=""> -- Select Marital Status --</option>
                                <option value="Single" <?php if($profile['data']->marital_status=="Single") echo "selected='selected'"; ?> >Single</option>
                                <option value="Married" <?php if($profile['data']->marital_status=="Married") echo "selected='selected'"; ?> >Married</option>
                            </select>
                          </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="n_parent">Name of Parent / Guardian <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="n_parent" name="n_parent" required="required" class="form-control  " value="<?php echo $profile['data']->n_parent; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_mob">Mobile No. of Parent / Guardian <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="parent_mob" name="parent_mob" required="required" class="form-control " placeholder="Enter 10 Digit Mobile Number" maxlength="10" minlength="10" value="<?php if($profile['data']->parent_mob!="0") echo $profile['data']->parent_mob; ?>" maxlength="10" minlength="10">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="house_name">House No. / Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="h_name" name="h_name" required="required" class="form-control" value="<?php echo $profile['data']->address; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Street / Area  <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="street_area" class="form-control col" type="text" name="street_area" required="required"  value="<?php echo $profile['data']->street_area; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="city_town">City / Town <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="city_town" name="city_town" required="required" class="form-control " value="<?php echo $profile['data']->city_town; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post">Post Office <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="post" name="post" required="required" class="form-control " value="<?php echo $profile['data']->post; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="district">District <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="district" name="district" required="required" class="form-control " value="<?php echo $profile['data']->district; ?>">
                            </div>
                          </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="state">State <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="state" name="state" required="required" class="form-control "  value="<?php echo $profile['data']->state; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="pincode">Pincode <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="pincode" name="pincode" required="required" class="form-control " maxlength="6" minlength="6" value="<?php if($profile['data']->pincode!="0") echo $profile['data']->pincode; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">E-Mail ID <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="email" id="email_id" name="email_id" required="required" style="text-transform : lowercase;" class="form-control " value="<?php if($this ->session-> userdata('email_id')==$profile['data']->email) {echo $this ->session-> userdata('email_id');} else {echo $profile['data']->email;} ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Mobile No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="phone" name="phone" required="required" class="form-control " maxlength="10" minlength="10"  value="<?php if($this ->session-> userdata('phone')==$profile['data']->phone) {echo $this ->session-> userdata('phone');} else {echo $profile['data']->phone;} ?>" readonly>
                            </div>
                          </div>
                          <hr>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="staff_advisor">Current Status / Highest Qualification <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="course_type" id="course_type" required="required">
                                <option value="">-- Select Course Type --</option>
                                <?php foreach ($course_types as $course_type): ?>
                                <option value="<?php echo $course_type['course_type_id']; ?>"><?php echo $course_type['course_type_name']; ?></option>
                              <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Course Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="course" id="course"  required="required">
                                <option value="">-- Select Course Name --</option>
                              </select>
                            </div>
                          </div>
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Branch /Specialization <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="stream" id="stream" onchange="get_branches(this.value)" required="required">
                                <option>-- Choose Branch / Specialization --</option>
                              </select>

                            </div>
                          </div>
                          <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="course_status">Course Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="course_status" class="form-control" required>
                                <option value=""> -- Select Course Status --</option>
                                <option value="0" <?php if($profile['data']->course_status=="0") echo "selected='selected'"; ?> >Appearing</option>
                                <option value="1" <?php if($profile['data']->course_status=="1") echo "selected='selected'"; ?> >Passed</option>
                            </select>
                          </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="year_of_pass">Year of Passing <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="year_of_pass" name="year_of_pass" required="required" class="form-control " maxlength="4" minlength="4" value="<?php if($profile['data']->year_of_pass!="0000") echo $profile['data']->year_of_pass; ?>">
                            </div>
                          </div>
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="state">Academic Remarks 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="academic_remarks" name="academic_remarks" class="form-control "  value="<?php echo $profile['data']->academic_remarks; ?>">
                            </div>
                          </div>
                          <hr>
                          <!--<div class="form-group row">-->
                          <!--  <label class="col-form-label col-md-3 col-sm-3 label-align" for="tuition_type">Designation <span class="required">*</span>-->
                          <!--  </label>-->
                          <!--  <div class="col-md-6 col-sm-6 ">-->
                          <!--  <select name="tuition_type" class="form-control" required readonly>-->
                          <!--      <option value=""> -- Select Role --</option>-->
                          <!--      <?php foreach ($usertypes as $usertype): ?>-->
                          <!--      <option value="<?php echo $usertype['usertypeID']; ?>" <?php if($profile['data']->usertypeID==$usertype['usertypeID']) echo "selected='selected'"; ?>><?php echo $usertype['usertype']; ?></option>-->
                          <!--    <?php endforeach ?>-->
                          <!--  </select>-->
                          <!--  </div>-->
                          <!--</div>-->
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="aadhaar">Aadhaar No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="aadhaar" name="aadhaar" required="required" class="form-control " maxlength="12" minlength="12"  value="<?php echo $profile['data']->aadhaar;?>">
                            </div>
                          </div>
                          
        
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="state"> Role / Designation <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea id="suggestion" name="suggestion" class="form-control " placeholder="Enter Your Role / Designation here"><?php echo $profile['data']->suggestion; ?></textarea>
                            </div>
                          </div>
                          
                          
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date of Joining <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="jod" name="jod" class="date-picker form-control" required="required" type="date" value="<?php echo $profile['data']->jod; ?>">
                            </div>
                          </div>
                          
                          <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3"><br>
                          <center>
                              <!--<button class="btn btn-dark" type="reset">Reset</button>-->
                          <button type="submit" class="btn btn-info"> Save <i class='fa fa-floppy-o'></i></button>
                        </center><br>
                        </div>
                      </div>

                    </form>

                    <input type="hidden" value="<?php if (isset($course['data']->course_id)) { echo $course['data']->course_id; } ?>" id="cid">
                    <input type="hidden" value="<?php if (isset($course['data']->course_stream_id)) { echo $course['data']->course_stream_id; } ?>" id="sid">
                    <input type="hidden" value="<?php if (isset($course['data']->course_type_id)) { echo $course['data']->course_type_id; } ?>" id="ctid">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<script>
    
    
                
                
                $(document).ready(function(){
                    
                    
                    var x = <?php echo $profile['data']->course_stream;?>;
                   
                
                    
                    if(x != 0){
                        var c_id= $('#cid').val();
                        var s_id = $('#sid').val();
                        var c_t_id = $('#ctid').val();
                    }
                    
                    
                    $('#course_type').on('change', function() {
                       $.ajax({
                         url: "<?php echo base_url().'employee/get_courses?id='; ?>"+this.value,
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                            $('#course').html(response);
                            if(x != 0) {
                              $("#course").val(c_id).change();
                            }
                            } 
                       });
                    });
                    
                    $('#course').on('change', function() {
                        $.ajax({
                         url: "<?php echo base_url().'employee/get_course_streams?id='; ?>"+this.value,
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                            $('#stream').html(response);
                            if(x !=0) {
                              $("#stream").val(s_id).change();
                            }
                            }
                       });
                    });
                    
                
                    

                    if(x !=0) { 
                        $("#course_type").val(c_t_id).change();
                    }
                    
                    
                });
</script>