<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trainer Registration | INTERVAL™</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <style type="text/css">
      input {
        text-transform: uppercase;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Trainer Registration <small>INTERVAL™</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>* Indicates Mandatory Fields.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Personal Details</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Communication Details</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Academic Details</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Preference</small>
                                          </span>
                          </a>
                        </li>
                        <!--<li>-->
                        <!--  <a href="#step-5">-->
                        <!--    <span class="step_no">5</span>-->
                        <!--    <span class="step_descr">-->
                        <!--                      Step 5<br />-->
                        <!--                      <small>Declaration</small>-->
                        <!--                  </span>-->
                        <!--  </a>-->
                        <!--</li>-->
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" action="action" method="post">
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Full Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="full_name" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="Gender">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Male
                            <input type="radio" class="flat" name="gender" id="genderM" value="M" required /> Female
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                            </p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="dob" name="dob" class="date-picker form-control" required="required" type="date">
                            </div>
                          </div>
                          <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="marital_status">Marital Status <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Single
                            <input type="radio" name="marital_status" id="marital_status_single" value="Single" required="required"  checked="checked" /> &nbsp;&nbsp;&nbsp; Married 
                            <input type="radio" name="marital_status" id="marital_status_married" value="Married" />
                            </p>
                          </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="n_parent">Name of Parent / Guardian <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="n_parent" name="n_parent" required="required" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent_mob">Mobile No. of Parent / Guardian <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="parent_mob" name="parent_mob" required="required" class="form-control " placeholder="Enter 10 Digit Mobile Number" maxlength="10" minlength="10">
                            </div>
                          </div>
                          

                        </form>
                      </div>
                      <div id="step-2">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="house_name">House No. / Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="house_name" name="house_name" required="required" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Street / Area  <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="street_area" class="form-control col" type="text" name="street_area" required="required" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="city_town">City / Town <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="city_town" name="city_town" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="post">Post Office <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="post" name="post" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="district">District <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="district" name="district" required="required" class="form-control ">
                            </div>
                          </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="state">State <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="state" name="state" required="required" class="form-control " value="Kerala">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="pincode">Pincode <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="pincode" name="pincode" required="required" class="form-control " maxlength="6" minlength="6">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="mob_no">Mobile No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="mob_no" name="mob_no" required="required" class="form-control " maxlength="10" minlength="10">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">E-Mail ID <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="email" id="email" name="email" required="required" class="form-control ">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div id="step-3">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="qualifications">Educational Qualifications <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <table class="table table-striped table-bordered">

                                <thead>
                                  <tr>
                                    <th>Qualifications</th>
                                    <th>Yes</th>
                                    <th>No</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>X</td>
                                    <td>
                                      <input type="radio" name="x" id="x_yes" value="0" checked="checked">
                                    </td>
                                    <td>
                                      <input type="radio" name="x" id="x_no" value="1">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>XII</td>
                                    <td>
                                      <input type="radio" name="xii" id="xii_yes" value="0" checked="checked">
                                    </td>
                                    <td>
                                      <input type="radio" name="xii" id="xii_no" value="1">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>Diploma</td>
                                    <td>
                                      <input type="radio" name="diploma" id="diploma_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="diploma" id="diploma_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>UG</td>
                                    <td>
                                      <input type="radio" name="ug" id="ug_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="ug" id="ug_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>PG</td>
                                    <td>
                                      <input type="radio" name="pg" id="pg_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="pg" id="pg_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>PhD</td>
                                    <td>
                                      <input type="radio" name="phd" id="phd_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="phd" id="phd_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>B.Ed / M.Ed</td>
                                    <td>
                                      <input type="radio" name="bed_med" id="bed_med_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="bed_med" id="bed_med_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>KTET / CTET</td>
                                    <td>
                                      <input type="radio" name="tet" id="tet_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="tet" id="tet_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>SET / NET</td>
                                    <td>
                                      <input type="radio" name="set_net" id="set_net_yes" value="0">
                                    </td>
                                    <td>
                                      <input type="radio" name="set_net" id="set_net_no" value="1" checked="checked">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="staff_advisor">Highest Qualification <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control">
                                <option value="">-- Select Course Type --</option>
                                <option value="">X</option>
                                <option value="">XII</option>
                                <option value="">Diploma</option>
                                <option value="">UG</option>
                                <option value="">PG</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Course Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control">
                                <option value="">-- Select Course Name --</option>
                                <optgroup label="Under Graduation (UG)">
                                <option value="">BA</option>
                                <option value="">BBA</option>
                                <option value="">BCA</option>
                                <option value="">B.Arch</option>
                                <option value="">B.Com</option>
                                <option value="">B.Sc</option>
                                <option value="">B.Tech</option>
                                <option value="">B.Voc</option>
                                <option value="">LLB</option>
                                <option value="">MBBS</option>
                              </optgroup>
                              <optgroup label="Post Graduation (PG)">
                                <option value="">MA</option>
                                <option value="">MBA</option>
                                <option value="">MCA</option>
                                <option value="">M.Arch</option>
                                <option value="">M.Com</option>
                                <option value="">M.Plan</option>
                                <option value="">M.Sc</option>
                                <option value="">M.Tech</option>
                                <option value="">M.Voc</option>
                                <option value="">LLM</option>
                                <option value="">MD</option>
                              </optgroup>
                              </select>
                            </div>
                          </div>
                            <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Branch /Specialization <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control">
                                <option>-- Choose Branch / Specialization --</option>
                                <optgroup label="BA / MA">
                                  <option>Arabic</option>
                                  <option>English</option>
                                  <option>Economics</option>
                                  <option>Hindi</option>
                                  <option>History</option>
                                  <option>Islamic Finance</option>
                                  <option>Malayalam</option>
                                  <option>Politics</option>
                                  <option>Sanskrit</option>
                                  <option>Sociology</option>
                                  <option>Urdu</option>
                                </optgroup>
                                <optgroup label="BBA / MBA">
                                  <option>Business Administration</option>
                                </optgroup>
                                <optgroup label="BCA / MCA">
                                  <option>Computer Applications</option>
                                </optgroup>
                                <optgroup label="B.Arch / M.Arch">
                                  <option>Architecture</option>
                                </optgroup>
                                <optgroup label="B.Com / M.Com">
                                  <option>Commerce</option>
                                </optgroup>
                                <optgroup label="B.Sc / M.Sc">
                                  <option>Biology</option>
                                  <option>Chemistry</option>
                                  <option>Geography</option>
                                  <option>Mathematics</option>
                                  <option>Physics</option>
                                  <option>Psychology</option>
                                </optgroup>
                                <optgroup label=" B.Tech / M.Tech">
                                  <option>Applied Electronics and Instrumentation Engineering (AEI)</option>
                                  <option>Chemical Engineering (CHE)</option>
                                  <option>Civil Engineering (CE)</option>
                                  <option>Computer Science and Engineering (CSE)</option>
                                  <option>Electronics and Communications Engineering (ECE)</option>
                                  <option>Electronics and Electrical Engineering (EEE)</option>
                                  <option>Industrial Engineering (IE)</option>
                                  <option>Mechanical Engineering (ME)</option>
                                </optgroup>
                                <optgroup label="B.Voc / M.Voc">
                                  <option>Broadcast & Journalism</option>
                                  <option>Software & Technology</option>
                                </optgroup>
                              </select>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="year_of_pass">Year of Passing <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="year_of_pass" name="year_of_pass" required="required" class="form-control " maxlength="4" minlength="4">
                            </div>
                          </div>

                        </form>
                      </div>
                      <div id="step-4">
                        <form class="form-horizontal form-label-left">
                            
                            
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Type of Tution <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Online
                            <input type="checkbox" class="flat" name="gender" id="genderM" value="M" required /> Offline
                            <input type="checkbox" class="flat" name="gender" id="genderF" value="F" />
                            </p>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered District (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="district" id="district" onchange="get_regions(this.value)" required="required">
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
                              <select class="form-control" name="region" id="region" onchange="get_branches(this.value)" required="required">
                                 <option value="">-- Select Region --</option>
                              <!--  <?php foreach ($regions as $region): ?>-->
                              <!--  <option value="<?php echo $region['region_id']; ?>"><?php echo $region['region_name']; ?></option>-->
                              <!--<?php endforeach ?>-->
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="full_name">Prefered Region 2 (For Home Tution) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <select class="form-control" name="region2" id="region2" onchange="get_branches(this.value)" required="required">
                                 <option value="">-- Select Region --</option>
                              <!--  <?php foreach ($regions as $region): ?>-->
                              <!--  <option value="<?php echo $region['region_id']; ?>"><?php echo $region['region_name']; ?></option>-->
                              <!--<?php endforeach ?>-->
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
                              <?php foreach ($subjects as $subject): ?>
                              <tr>
                                <td><?php echo $subject['subject_name']; ?></td>
                                <td><?php if($subject['lp']==0){ ?><input type="checkbox" name=""><?php }?></td>
                                <td><?php if($subject['up']==0){ ?><input type="checkbox" name=""><?php }?></td>
                                <td><?php if($subject['hs']==0){ ?><input type="checkbox" name=""><?php }?></td>
                                <td><?php if($subject['hss']==0){ ?><input type="checkbox" name=""><?php }?></td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!--<div id="step-5">-->
                      <!--  <h2 class="StepTitle">Step 4 Content</h2>-->
                      <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
                      <!--    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
                      <!--  </p>-->
                      <!--</div>-->

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/build/js/custom.min.js"></script>

	
  </body>
</html>
<script>
    function get_regions(str)
                {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("region").innerHTML = this.responseText;
                     document.getElementById("region2").innerHTML = this.responseText;
                    }
                  };
                  xhttp.open("GET", "get_regions?id="+str, true);
                  xhttp.send();
                }
                
    function get_branches(str)
                {
                  var x=document.getElementById("region").value;
                  var y=document.getElementById("region2").value;
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("branch_div").innerHTML = this.responseText;
                    }
                  };
                  xhttp.open("GET", "get_branches?id="+x+"&id_2="+y, true);
                  xhttp.send();
                }
</script>