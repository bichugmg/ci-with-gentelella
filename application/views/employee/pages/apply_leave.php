<!-- page content -->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Apply for Leave</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>INTERVAL™<small>* Indicates Mandatory Fields</small></h2><div class="pull-right">
                              <a href="leave_status"><button type="button" class="btn btn-success btn-sm">View Applications</button></a>
                            </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" autocomplete="off">
                          
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="from_date">From Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date" id="from_date" name="from_date" required="required" class="form-control " required>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="to_date">To Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date" id="to_date" name="to_date" required="required" class="form-control " required>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no_of_days">No.of Days<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" id="no_of_days" name="no_of_days" required="required" class="form-control " required>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="reason">Reason <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea name="reason" id="reason" class="form-control" placeholder="Enter the Reason for Leave" required></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <br>
                          <center><button class="btn btn-dark" type="reset">Reset</button>
                          <button type="submit" class="btn btn-info"> Apply <i class='fa fa-floppy-o'></i></button>
                        </center>
                        </div>
                      </div>

                    </form>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /page content -->
        
        

<script>

$('#district_id').change(function() {
             var dis = $(this).val();
             $.ajax({
                        url:"<?php echo base_url();?>trainer/fetch_branches",
                        method:"POST",
                        data:{district:dis},
                        success:function(data)
                        {
                            $("#branch_id").html(data); 
                        }
             });
            });
</script>