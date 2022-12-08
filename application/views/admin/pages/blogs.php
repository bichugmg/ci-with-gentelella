<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Blogs</h3>
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
                              <a href="insert_blog"><button type="button" class="btn btn-info">Add Blog</button></a>
                            </div>
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Description</th>
                          <th>Author</th>
                          <th>Image</th>
                          <th>Published on</th>
                          <th>Remove</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($blog_data ->result() as $value) {
                          $i++;
                          ?>
                          <tr align="center">
                          <td align="center"><?php echo $i ;?></td>
                          <td  id="id<?php echo $value->id ;?>"><?php echo $value->title ;?></td>
                          <td ><?php echo $value->category ;?></td>
                          <td ><?php echo $value->body ;?></td>
                          <td ><?php echo $value->author ;?></td>
                          <td ><img src="<?php echo base_url().$value->img; ?>" height="100px" width="100px"></td>
                          <td ><?php echo $value->created_at ;?></td>
                          <td ><button type="button" class="btn btn-danger" name="delete" onclick="delete_blog(<?php echo $value->id ;?>)"><i class='fa fa-trash'></i></button></td>                          
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
          function delete_blog(str)
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
                  xhttp.open("GET", "delete_blog?id="+str, true);
                  xhttp.send();
                  } else {
                    txt = "You pressed Cancel!";
                  }
                  
                }
        </script>