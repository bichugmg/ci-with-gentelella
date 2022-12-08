<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Events</h3>
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
                              <!--<a href="apply_leave"><button type="button" class="btn btn-info btn-sm">Apply for Leave</button></a>-->
                            </div>
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="overflow-x:scroll;">
                      <table id="datatable-responsive" class="table table-striped table-bordered">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                                <th>Event Code</th>
                                <th>Event Name</th>
                                <th>Event Status</th>
                                <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($events as $event) {
                          $i++;
                          ?>
                          <tr align="center">
                          <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="Referral ID">
                                        <?php echo $event->event_code; ?>
                                    </td>
                                    <td data-title="Name of Student">
                                        <?php echo $event->event_name; ?>
                                    </td>
                                    <td data-title="Current Status" style="white-space: nowrap;">
                                        <?php
                                        if($event->event_status==0)
                                            echo"<span style='color:red;'>Inactive</span>";
                                        else 
                                            echo"<span style='color:green;'>Active</span>";
                                        ?>
                                    </td>
                                    <td data-title="Last Updated By">
                              <a href="event_data/<?php echo $event->event_id; ?>"><button type="button" class="btn btn-info btn-sm">View</button></a>
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