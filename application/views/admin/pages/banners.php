<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Banners</h3>
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
                              <a href="insert_banner"><button type="button" class="btn btn-info">Add Banner</button></a>
                            </div>
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                          <th>Image</th>
                          <th>Remove</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($banner_data ->result() as $value) {
                          $i++;
                          ?>
                          <tr align="center">
                          <td align="center" id="id<?php echo $value->id ;?>"><?php echo $i ;?></td>
                          <td ><img src="<?php echo base_url().$value->img; ?>" height="100px" width="200px"></td>
                          <td ><button type="button" class="btn btn-danger" name="delete" onclick="delete_banner(<?php echo $value->id ;?>)"><i class='fa fa-trash'></i></button></td>                          
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
          function delete_banner(str)
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
                  xhttp.open("GET", "delete_banner?id="+str, true);
                  xhttp.send();
                  } else {
                    txt = "You pressed Cancel!";
                  }
                  
                }
        </script>