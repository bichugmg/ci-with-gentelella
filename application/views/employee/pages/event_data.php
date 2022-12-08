<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $single_event->event_name; ?></h3>
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
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                                <th><?php echo $single_event->column_1_text; ?></th>
                                <th><?php echo $single_event->column_2_text; ?></th>
                                <th><?php echo $single_event->column_3_radio; ?></th>
                                <th><?php echo $single_event->column_4_text; ?></th>
                                <th><?php echo $single_event->column_5_text; ?></th>
                                <th><?php echo $single_event->column_6_dropdown; ?></th>
                                <th><?php echo $single_event->column_7_text; ?></th>
                                <th><?php echo $single_event->column_8_number; ?></th>
                                <th><?php echo $single_event->column_9_email; ?></th>
                                <th><?php echo $single_event->column_10_number; ?></th>
                                <th>WhatsApp</th>
                                <th>Registered On</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($event_datas as $event_data) {
                          $i++;
                          ?>
                          <tr align="center">
                          <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="Referral ID">
                                        <?php echo $event_data->column_1_text; ?>
                                    </td>
                                    <td data-title="Name of Student">
                                        <?php echo $event_data->column_2_text; ?>
                                    </td>
                                    <td data-title="Class">
                                        <?php echo $event_data->column_3_radio; ?>
                                    </td>
                                    <td data-title="Course Prefered">
                                        <?php echo $event_data->column_4_text; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_5_text; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_6_dropdown; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_7_text; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_8_number; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_9_email; ?>
                                    </td>
                                    <td data-title="Notes">
                                        <?php echo $event_data->column_10_number; ?>
                                    </td>
                                    <td data-title="WhatsApp">
                                        <a href="https://wa.me/<?php echo $event_data->country_code.$event_data->column_10_number; ?>" target="_blank"><?php echo '+'.$event_data->country_code.$event_data->column_10_number; ?>
                                    </td>
                                    <td data-title="Last Updated On" style="white-space: nowrap;">
                                        <?php echo $event_data->timestamp; ?>
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