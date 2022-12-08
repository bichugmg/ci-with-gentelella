<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee Accounts Profile</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bank Data<small>INTERVAL</small></h2>
                    <div class="title_right">
                            
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      The Following Employees are registered at Portal.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                          <th>Name of Bank & Branch</th>
                          <th>IFSC</th>
                          <th>Account Number</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Email ID</th>
                          <th>Mobile No.</th>
                          <th>UPI</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $i=0;
                        foreach ($trainer_data ->result() as $value) {
                            $i++;
                          ?>
                          <tr align="center">
                          <td align="center" height="5px"><?php echo $i ;?></td>
                          <td align="center" height="5px"><?php 
                          $ifsc=$value->ifsc;
                          if(isset($ifsc))
                          {
                          $json = file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
                                        $obj = json_decode($json);echo strtoupper($obj->BANK).'<br>'.ucwords(strtolower($obj->BRANCH)); }?></td>    
                          <td align="center" height="5px"><?php echo $value->ifsc;?></td>                                   
                          <td align="center" height="5px"><?php echo $value->account_no ;?></td>              
                          <td align="center" height="5px"><?php echo $value->name ;?></td>          
                          <td align="center" height="5px" style="max-width: 100%; white-space: nowrap;"><?php echo $value->usertype ;?></td>
                          <td align="center" height="5px"><?php echo $value->email ;?></td>
                          <td align="center" height="5px"><?php echo $value->phone ;?></td>                   
                          <td align="center" height="5px"><?php echo $value->upi_app.'<br>'.$value->upi_mob_no ;?></td>                                       
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
              <script>
                function f(str)
                {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     // document.getElementById("demo").innerHTML = this.responseText;
                     window.location.reload();
                    }
                  };
                  xhttp.open("GET", "update_contact_status?id="+str, true);
                  xhttp.send();
                  // window.location.href="<?php base_url().'index.php/login_c/index;' ?>";
                  // window.location.reload();
                }

                function unlock_all_pending()

                { var r=confirm('Are You Sure Want to Clear All Pending Contact Data Edit Requests ?');
                  if (r==true)
                  {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     alert("All Pending Contact Data Edit Requests are Cleared.");
                     window.location.reload();
                    }
                  };
                  xhttp.open("GET", "unlock_all_pending_stud_contact", true);
                  xhttp.send();
                }
                }

                function unlock_all()

                { var r=confirm('Are You Sure Want to Unlock All Contact Data ?');
                  if (r==true)
                  {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     alert("All Contact Data Unlocked.");
                     window.location.reload();
                    }
                  };
                  xhttp.open("GET", "unlock_all_stud_contact", true);
                  xhttp.send();
                }
                }

                function lock_all()

                { var r=confirm('Are You Sure Want to Lock All Contact Data ?');
                  if (r==true)
                  {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     alert("All Contact Data Locked.");
                     window.location.reload();
                    }
                  };
                  xhttp.open("GET", "lock_all_stud_contact", true);
                  xhttp.send();
                }
                }
              </script>


        <!-- /page content -->