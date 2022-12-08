<!-- page content -->
<script>
   function handleClick(b){
       if (b=='no'){
       document.getElementById('country_id').disabled = false;
       document.getElementById('state').disabled = false;
       document.getElementById('country_id').value = "";
       document.getElementById('state').value = "";
       document.getElementById('district1').disabled = false;
       document.getElementById('dis_text').style.display="block";
       document.getElementById('dis_sel').style.display="none";
       document.getElementById('district2').disabled=true;
       }
       else{
       document.getElementById('country_id').disabled = true;
       document.getElementById('state').disabled = true;
       document.getElementById('country_id').value = "1";
       document.getElementById('state').value = "KERALA";
       document.getElementById('dis_text').style.display="none";
       document.getElementById('district1').disabled=true;
       document.getElementById('dis_sel').style.display="block";
       document.getElementById('district2').disabled=false;
       }
   }
   
   
   
   
   function listCourse(a){
       if (a==1||a==2)
       {
           document.getElementById('o1').style.display="block";
           document.getElementById('o2').style.display="none";
           document.getElementById('o3').style.display="block";
           document.getElementById('o4').style.display="none";
           document.getElementById('o5').style.display="none";
       }
       else{
           document.getElementById('o1').style.display="none";
           document.getElementById('o2').style.display="block";
           document.getElementById('o3').style.display="block";
           document.getElementById('o4').style.display="block";
           document.getElementById('o5').style.display="block";
       }
   }
   
   
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
                  <form id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url('employee/submit_lead');?>" enctype="multipart/form-data" onsubmit="return validate_form(this)" autocomplete="off">
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="text" id="lead_name" name="lead_name" required="required" class="form-control"  >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_class">Class <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="lead_class" id="lead_class" class="form-control" required onchange="listCourse(this.value);">
                              <option value=""> -- Select Class --</option>
                              <?php 
                              foreach($class as $cls){
                                  echo '<option value="'.$cls['class_id'].'" >'.$cls['class_name'].'</option>';
                              }?>
                              <!--<option value="lkg" >LKG</option>-->
                              <!--<option value="ukg" >UKG</option>-->
                              <!--<option value="1">1</option>-->
                              <!--<option value="2" >2</option>-->
                              <!--<option value="3" >3</option>-->
                              <!--<option value="4"> 4</option>-->
                              <!--<option value="5" >5</option>-->
                              <!--<option value="6" >6</option>-->
                              <!--<option value="7">7</option>-->
                              <!--<option value="8" >8</option>-->
                              <!--<option value="9" >9</option>-->
                              <!--<option value="10">10</option>-->
                              <!--<option value="11" >11</option>-->
                              <!--<option value="12" >12</option>-->
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_course_id">Select Course <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="lead_course_id" id="lead_course_id" class="form-control" required onchange="listCourse(this.value);">
                               <option value=""> -- Select Course --</option>
                              <?php 
                              foreach( $course as $crs){
                                  echo '<option value="'.$crs['course_available_id'].'" style="display:none" id="o'.$crs['course_available_id'].'" >'.$crs['course_name'].'</option>';
                                  
                              }?>
                           <!-- //   <option value="academics" style="display:none" id="o5">  Academics</option>-->
                           <!-- //   <option value="foundation" style="display:none" id="o2">Foundation </option>-->
                           <!-- //   <option value="handwriting" style="display:none" id="o3">  Handwriting</option>-->
                           <!-- //   <option value="geine" style="display:none" id="o1"> Little Genie</option>-->
                           <!-- //   <option value="english" style="display:none" id="o4">  Spoken English</option>-->
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_syllabus_id">Syllabus  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="lead_syllabus_id" id="lead_syllabus_id" class="form-control" required >
                              <option value="" > -- Select Syllabus --</option>
                              <?php 
                              foreach($syllabus as $syl)
                              {
                                  echo '<option value="'.$syl['syllabus_id'].'" >'.$syl['syllabus_name'].'</option>';
                            
                              }?>
                              
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_contact_person">Contact Person <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="text" id="lead_contact_person" name="lead_contact_person" required="required" class="form-control ">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_mob_no">Mobile No. of Contact Person <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="number" id="lead_mob_no" name="lead_mob_no" required="required" class="form-control " placeholder="Enter 10 Digit Mobile Number" maxlength="10" minlength="10" maxlength="10" minlength="10">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_email_id" >Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="email" id="lead_email_id" name="lead_email_id" required="required" class="form-control ">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_relation">Relation  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="lead_relation" id="lead_relation" class="form-control" required >
                              <option value="" > -- Select Relation --</option>
                              <?php 
                              foreach($relationship as $relation)
                              {
                                  echo '<option value="'.$relation['relationship_id'].'" >'.$relation['relationship_name'].'</option>';
                            
                              }?>
                              
                           </select>
                        </div>
                     </div>                             
                              
                              
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Resident of kerala <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="radio" id="yes" name="Res_of_kl" value="yes" checked  onclick="handleClick(this.value)"><label for="yes">Yes</label><br>
                           <input type="radio" id="no" name="Res_of_kl" value="no" onclick="handleClick(this.value)"><label for="no"  > No</label>
                        </div>
                     </div>
                     <!--<div class="form-group row">-->
                     <!--   <label class="col-form-label col-md-3 col-sm-3 label-align" for="country" >Country <span class="required">*</span>-->
                     <!--   </label>-->
                     <!--   <div class="col-md-6 col-sm-6 ">-->
                     <!--      <input type="text" id="country" name="country" required="required" class="form-control " value="INDIA" disabled>-->
                     <!--   </div>-->
                     <!--   <br>-->
                     <!--</div>-->
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="country_id">Country  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="country_id" id="country_id" class="form-control" required  disabled value="1" >
                              <!--<option value="" > -- Select Country --</option>-->
                              <?php 
                              foreach($country as $con)
                              {
                                  echo '<option value="'.$con['country_id'].'" >'.$con['country_name'].'</option>';
                            
                              }?>
                              
                           </select>
                        </div>
                     </div>    
                     <div class="form-group row" >
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="state" >State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="text" id="state" name="state" required="required" class="form-control " value="KERALA"disabled>
                        </div>
                        <br>
                     </div>
                     <div class="form-group row"   >
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_district_id">District <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id ="dis_text" style="display:none;">
                           <input type="text" id="district1" name="lead_district_id" required="required" class="form-control " disabled>
                        </div>
                        <div class="col-md-6 col-sm-6 " id ="dis_sel">
                           <select name="lead_district_id" id="district2" class="form-control" required >
                              <option value=""> -- Select District --</option>
                              <?php 
                                 foreach ($district as $dis)
                                 {      
                                     if($dis['state_id']==1)
                                     echo '<option value="'.$dis['district_id'].'" >'.$dis['district_name'].'</option>';
                                     
                                 }
                                ?>
                          
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_place">Place <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <input type="text" id="lead_place" name="lead_place" required="required" class="form-control ">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lead_source" >Source <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                           <select name="lead_source" id="lead_source" class="form-control" required >
                              <option value=""> -- Select Source --</option>
                              <?php 
                                 foreach ($source as $src)
                                 {      
                                     
                                     echo '<option value="'.$src['source_id'].'" >'.$src['source_name'].'</option>';
                                     
                                 }
                                ?>
                          
                           </select>
                        </div>
                     </div>
                    
                     <div class="ln_solid"></div>
                     <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                           <br>
                           <center>
                              <!--<button class="btn btn-dark" type="reset">Reset</button>-->
                              <button type="submit" class="btn btn-info"> Save <i class='fa fa-floppy-o'></i></button>
                           </center>
                           <br>
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