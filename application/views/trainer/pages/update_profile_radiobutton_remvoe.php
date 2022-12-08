<!-- page content -->
<script>
    function validate_form(){
        var mob_no=document.getElementById('mob_no');
        var parent_mob=document.getElementById('parent_mob');
        var pincode=document.getElementById('pincode');
        var year_of_pass=document.getElementById('year_of_pass');
        
        var branches=document.getElementsByName("branch[]");
    var branch_okay=false;
    for(var i=0,l=branches.length;i<l;i++)
    {
        if(branches[i].checked)
        {
            branch_okay=true;
            break;
        }
    }
        
    var subjects = document.getElementsByClassName("subject");
    var subject_okay=false;
    for(var i=0,l=subjects.length;i<l;i++)
    {
        if(subjects[i].checked)
        {
            subject_okay=true;
            break;
        }
    }
    if(mob_no.value.length!=10)
    {
       alert("Enter Your 10 Digit Mobile No.");
       document.getElementById("mob_no").focus();
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
    else if(!branch_okay)
    {alert("Please Select atleast One Branch in Your Locality.");
        return false;
    }
    else if(!subject_okay)
    {
        alert("Please Select atleast One Subject for Tuition.");
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
                <h3>Trainer Profile</h3>
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="full_name" name="full_name" required="required" class="form-control" value="<?php echo $profile['data']->full_name; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="Gender">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Male
                            <input type="radio" class="flat" name="gender" id="genderM" value="Male" required="required" <?php if($profile['data']->gender=="Male") echo "checked='checked'"; ?> /> Female
                            <input type="radio" class="flat" name="gender" id="genderF" value="Female" <?php if($profile['data']->gender=="Female") echo "checked='checked'"; ?> />
                            </p>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="marital_status">Marital Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Single
                            <input type="radio" class="flat" name="marital_status" id="marital_status_single" value="Single" required="required" <?php if($profile['data']->marital_status=="Single" || $profile['data']->marital_status=="") echo "checked='checked'"; ?> /> &nbsp;&nbsp;&nbsp; Married 
                            <input type="radio" class="flat" name="marital_status" id="marital_status_married" value="Married" <?php if($profile['data']->marital_status=="Married") echo "checked='checked'"; ?> />
                            </p>
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
                              <input type="text" id="h_name" name="h_name" required="required" class="form-control" value="<?php echo $profile['data']->h_name; ?>">
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
                              <input type="email" id="email_id" name="email_id" required="required" style="text-transform : lowercase;" class="form-control " value="<?php if($this ->session-> userdata('email_id')==$profile['data']->email_id) {echo $this ->session-> userdata('email_id');} else {echo $profile['data']->email_id;} ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="mob_no">Mobile No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="mob_no" name="mob_no" required="required" class="form-control " maxlength="10" minlength="10"  value="<?php if($this ->session-> userdata('mob_no')==$profile['data']->mob_no) {echo $this ->session-> userdata('mob_no');} else {echo $profile['data']->mob_no;} ?>">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Course Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="course" id="course"  required="required">
                                <option value="">-- Select Course Name --</option>
                              </select>
                            </div>
                          </div>
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Branch /Specialization <span class="required">*</span>
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
                              <br>
                            <p>Appearing
                            <input type="radio" class="flat" name="course_status" id="course_status_appearing" value="1" required="required" <?php if($profile['data']->course_status=="1") echo "checked='checked'"; ?> /> &nbsp;&nbsp;&nbsp; Passed 
                            <input type="radio" class="flat" name="course_status" id="course_status_passed" value="0" <?php if($profile['data']->course_status=="0") echo "checked='checked'"; ?> />
                            </p>
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
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tuition_type">Type of Tution <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p><input type="radio" class="flat" name="tuition_type" id="tuition_typeOnline" value="Online" <?php if($profile['data']->tuition_type=="Online") echo "checked='checked'"; ?> required /> Online &nbsp;&nbsp;
                            <input type="radio" class="flat" name="tuition_type" id="tuition_typeOffline" value="Offline" <?php if($profile['data']->tuition_type=="Offline" || $profile['data']->tuition_type=="") echo "checked='checked'"; ?> /> Offline &nbsp;&nbsp;
                            <input type="radio" class="flat" name="tuition_type" id="tuition_typeBoth" value="Both" <?php if($profile['data']->tuition_type=="Both") echo "checked='checked'"; ?>/> Both
                            
                            </p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered District (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="prefered_district" id="prefered_district" required="required">
                                 <option value="">-- Select District --</option>
                                <?php foreach ($districts as $district): ?>
                                <option value="<?php echo $district['district_id']; ?>"><?php echo $district['district_name']; ?></option>
                              <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered Region 1 (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="prefered_region_1" id="prefered_region_1" required="required">
                                 <option value="">-- Select Region 1 --</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered Region 2 (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="prefered_region_2" id="prefered_region_2" required="required">
                                 <option value="">-- Select Region 2 --</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row" id="div_branch">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered Branch (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 " id="branch_div">
                              <select class="form-control" required="required" disabled="disabled">
                                 <option value="">-- Select Branch --</option>
                              
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="prefered_syllabus">Prefered Syllabus Type <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p><input type="radio" class="flat" name="prefered_syllabus" id="prefered_syllabusState" value="State" <?php if($profile['data']->prefered_syllabus=="State") echo "checked='checked'"; ?> required /> State &nbsp;&nbsp;
                            <input type="radio" class="flat" name="prefered_syllabus" id="prefered_syllabusCBSE/ICSE" value="CBSE/ICSE" <?php if($profile['data']->prefered_syllabus=="CBSE/ICSE" ) echo "checked='checked'"; ?> /> CBSE / ICSE &nbsp;&nbsp;
                            <input type="radio" class="flat" name="prefered_syllabus" id="prefered_syllabusBoth" value="Both" <?php if($profile['data']->prefered_syllabus=="Both" || $profile['data']->prefered_syllabus=="") echo "checked='checked'"; ?>/> Both
                            
                            </p>
                            </div>
                          </div>
                          <div class="form-group row" id="div_quali">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered Standard / Subject <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">

                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Subject</th>
                                <th>LP</th>
                                <th>UP</th>
                                <th>HS</th>
                                <th>HSS</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?
                                $lp_subjects= array();
                                $up_subjects= array();
                                $hs_subjects= array();
                                $hss_subjects= array();
                                foreach($prefered_subjects as $prefered_subject) {
                                  if($prefered_subject['category_id']=='1')
                                  {
                                    $lp_subjects[]=$prefered_subject['subject_id'];
                                  }
                                  else if($prefered_subject['category_id']=='2')
                                  {
                                    $up_subjects[]=$prefered_subject['subject_id'];
                                  }
                                  else if($prefered_subject['category_id']=='3')
                                  {
                                    $hs_subjects[]=$prefered_subject['subject_id'];
                                  }
                                  else if($prefered_subject['category_id']=='4')
                                  {
                                    $hss_subjects[]=$prefered_subject['subject_id'];
                                  }
                                }
                                ?>
                              <?php foreach ($subjects as $subject): ?>
                              <tr>
                                <td><?php echo $subject['subject_name']; ?></td>
                                <td><?php if($subject['lp']==0){ ?><input type="checkbox" class="subject" name="lp[]" value="<?php echo $subject['subject_id']; ?>" <?php if(in_array($subject['subject_id'], $lp_subjects)) echo "checked='checked'"; ?>><?php }?></td>
                                <td><?php if($subject['up']==0){ ?><input type="checkbox" class="subject" name="up[]" value="<?php echo $subject['subject_id']; ?>" <?php if(in_array($subject['subject_id'], $up_subjects)) echo "checked='checked'"; ?>><?php }?></td>
                                <td><?php if($subject['hs']==0){ ?><input type="checkbox" class="subject" name="hs[]" value="<?php echo $subject['subject_id']; ?>" <?php if(in_array($subject['subject_id'], $hs_subjects)) echo "checked='checked'"; ?>><?php }?></td>
                                <td><?php if($subject['hss']==0){ ?><input type="checkbox" class="subject" name="hss[]" value="<?php echo $subject['subject_id']; ?>" <?php if(in_array($subject['subject_id'], $hss_subjects)) echo "checked='checked'"; ?>><?php }?></td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                            </div>
                          </div>
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="state">Remarks / Suggestions 
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea id="suggestion" name="suggestion" class="form-control "><?php echo $profile['data']->suggestion; ?></textarea>
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
    // function get_courses(str)
    //             {
    //               var xhttp = new XMLHttpRequest();
    //               xhttp.onreadystatechange = function() {
    //                 if (this.readyState == 4 && this.status == 200) {
    //                  document.getElementById("course").innerHTML = this.responseText;
    //                 }
    //               };
    //               xhttp.open("GET", "get_courses?id="+str, true);
    //               xhttp.send();
    //             }
    // function get_course_streams(str)
    //             {
    //               var xhttp = new XMLHttpRequest();
    //               xhttp.onreadystatechange = function() {
    //                 if (this.readyState == 4 && this.status == 200) {
    //                  document.getElementById("stream").innerHTML = this.responseText;
    //                 }
    //               };
    //               xhttp.open("GET", "get_course_streams?id="+str, true);
    //               xhttp.send();
    //             }
    // function get_regions(str)
    //             {
    //               var xhttp = new XMLHttpRequest();
    //               xhttp.onreadystatechange = function() {
    //                 if (this.readyState == 4 && this.status == 200) {
    //                  document.getElementById("prefered_region_1").innerHTML = this.responseText;
    //                  document.getElementById("prefered_region_2").innerHTML = this.responseText;
    //                 }
    //               };
    //               xhttp.open("GET", "get_regions?id="+str, true);
    //               xhttp.send();
    //             }
                
    // function get_branches(str)
    //             {
    //               var x=document.getElementById("prefered_region_1").value;
    //               var y=document.getElementById("prefered_region_2").value;
    //               var xhttp = new XMLHttpRequest();
    //               xhttp.onreadystatechange = function() {
    //                 if (this.readyState == 4 && this.status == 200) {
    //                  document.getElementById("branch_div").innerHTML = this.responseText;
    //                 }
    //               };
    //               xhttp.open("GET", "get_branches?id="+x+"&id_2="+y, true);
    //               xhttp.send();
    //             }
    
    
    
    
                
                
                $(document).ready(function(){
                    // $('#full_name').val ("foo");
                    // alert("success");
                    
                    var x = <?php echo $profile['data']->course_stream;?>;
                    var p_district = <?php echo $profile['data']->prefered_district;?>;
                    var p_reg_1 = <?php echo $profile['data']->prefered_region_1;?>;
                    var p_reg_2 = <?php echo $profile['data']->prefered_region_2;?>;
                
                    
                    if(x != 0){
                        var c_id= $('#cid').val();
                        var s_id = $('#sid').val();
                        var c_t_id = $('#ctid').val();
                    }
                    // var y = 0;
                    // get_var();
                    // alert(c_id);
                    
                    $('#course_type').on('change', function() {
                       $.ajax({
                         url: "<?php echo base_url().'trainer/get_courses?id='; ?>"+this.value,
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
                         url: "<?php echo base_url().'trainer/get_course_streams?id='; ?>"+this.value,
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
                    
                
                    $('#prefered_district').on('change', function() {
                        $.ajax({
                         url: "<?php echo base_url().'trainer/get_regions?id='; ?>"+this.value,
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                            $('#prefered_region_1').html(response);
                            $('#prefered_region_2').html(response);
                            
                            if(p_reg_1 != 0){
                               $("#prefered_region_1").val(p_reg_1).change(); 
                            }
                         }
                       });
                    });
                    
                    $('#prefered_region_1').on('change', function() {
                        $.ajax({
                         url: "<?php echo base_url().'trainer/get_branches?id='; ?>"+$('#prefered_region_1').val() + "&id_2="+ $('#prefered_region_2').val(),
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                            $('#branch_div').html(response);
                            if(p_reg_2 != 0){
                               $("#prefered_region_2").val(p_reg_2).change();
                               p_reg_2 = 0;
                            }
                         }
                       });
                    });
                    
                    $('#prefered_region_2').on('change', function() {
                        $.ajax({
                         url: "<?php echo base_url().'trainer/get_branches?id='; ?>"+$('#prefered_region_1').val() + "&id_2="+ $('#prefered_region_2').val(),
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                            $('#branch_div').html(response);
                         }
                       });
                    });

                    if(x !=0) { 
                        $("#course_type").val(c_t_id).change();
                    }
                    
                    if(p_district !=0) { 
                        $("#prefered_district").val(p_district).change();
                    }
                    
                    
                    // setTimeout(function(){
                    //  $("#course").val("2").change();
                    // }, 2000);
                    
                    
                    
                    // $(":checkbox[name='notifyday'][value='wed']").attr('checked', true);
                    
                    // $(document).on('change', 'select', function (e) {
                    //     // do something 
                    // });
                    
                });
</script>