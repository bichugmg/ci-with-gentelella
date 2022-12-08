<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Referral Status</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
                    <div class="title_right">
                            <div class="pull-right">
                              <a href="add_referral"><button type="button" class="btn btn-info btn-sm">Add Referral</button></a>
                            </div>
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="overflow-x:scroll;">
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                                <th>Referral ID</th>
                                <th>Name of Student</th>
                                <th>Class</th>
                                <th>Course Prefered</th>
                                <th>Name of Parent</th>
                                <th>Mobile No.</th>
                                <th>Note</th>
                                <th>Address</th>
                                <th>Referred On</th>
                                <th>Current Status</th>
                                <th>Last Updated By</th>
                                <th>Last Updated On</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($referrals as $referral) {
                          $i++;
                          ?>
                          <tr align="center">
                          <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="Referral ID">
                                        <?php echo $referral->visitorID; ?>
                                    </td>
                                    <td data-title="Name of Student">
                                        <?php echo $referral->visitor_name; ?>
                                    </td>
                                    <td data-title="Class">
                                        <?php echo $referral->class; ?>
                                    </td>
                                    <td data-title="Course Prefered">
                                        <?php echo $referral->course_name; ?>
                                    </td>
                                    <td data-title="Name of Parent">
                                        <?php echo $referral->company_name; ?>
                                    </td>
                                    <td data-title="Mobile No.">
                                        <a href="tel:+91<?php echo $referral->visitor_phone; ?>"><?php echo $referral->visitor_phone; ?></a>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $referral->note; ?>
                                    </td>
                                    <td data-title="Address" style="white-space: nowrap;">
                                        <?php echo $referral->coming_from.' | '.$referral->group.'<br>'.$referral->district_name; ?>
                                    </td>
                                    <td data-title="Referred On" style="white-space: nowrap;">
                                        <?php echo $referral->check_in; ?>
                                    </td>
                                    <td data-title="Current Status" style="white-space: nowrap;">
                                        <?php
                                        if($referral->status==0)
                                            echo"<span style='color:orange;'>Pending</span>";
                                        else if($referral->status==1)
                                            echo"<span style='color:violet;'>Call 1 Initiated</span>";
                                        else if($referral->status==2)
                                            echo"<span style='color:violet;'>Call 2 Initiated</span>";
                                        else if($referral->status==3)
                                            echo"<span style='color:violet;'>Call 3 Initiated</span>";
                                        else if($referral->status==4)
                                            echo"<span style='color:blue;'>Assessment Scheduled</span>";
                                        else if($referral->status==5)
                                            echo"<span style='color:green;'>Admission Confirmed</span>";
                                        else if($referral->status==6)
                                            echo"<span style='color:red;'>Admission Cancelled</span>";
                                        ?>
                                    </td>
                                    <td data-title="Last Updated By">
                                        <?php echo $referral->name; ?>
                                    </td>
                                    <td data-title="Last Updated On" style="white-space: nowrap;">
                                        <?php echo $referral->check_out; ?>
                                    </td>                         
                          </tr>
                        <?php
                      }
                        ?>
                      </tbody>
                    </table>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <script type="text/javascript">
          function delete_trainer(str)
                {
                  var n=document.getElementById("id"+str).innerText;
                  var r = confirm("Are You sure want to Delete '"+n+"' ?");
                  if (r == true) {
                    var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     alert("Deleted Successfully.");
                     window.location.reload();
                    }
                  };
                  xhttp.open("GET", "delete_trainer?id="+str, true);
                  xhttp.send();
                  } else {
                    txt = "You pressed Cancel!";
                  }
                  
                }
        </script>