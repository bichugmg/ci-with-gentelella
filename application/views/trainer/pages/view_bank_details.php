<!-- page content -->

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
                        
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="account_holder">Name of Account Holder <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="account_holder" name="account_holder" required="required" class="form-control " value="<?php echo $bank_data['data']->account_holder; ?>" readonly>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="ifsc">IFSC <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="ifsc" name="ifsc" required="required" class="form-control " maxlength="11" minlength="11" value="<?php echo $bank_data['data']->ifsc; ?>" readonly>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="bank_branch">Bank & Branch <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="bank_branch" name="bank_branch" required="required" class="form-control " value="" readonly>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="account_no">Account Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="account_no" name="account_no" required="required" class="form-control " value="<?php echo $bank_data['data']->account_no; ?>" readonly>
                            </div>
                          </div>
                          
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="upi_app">Prefered UPI App <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" style="text-transform : none;" id="account_holder" name="account_holder" required="required" class="form-control " value="<?php echo $bank_data['data']->upi_app; ?>" readonly>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="upi_mob_no">UPI Registered Mobile No. <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="number" id="upi_mob_no" name="upi_mob_no" required="required" class="form-control " placeholder="Enter UPI Registered Mobile No." value="<?php echo $bank_data['data']->upi_mob_no; ?>" readonly>
                            </div>
                          </div>
                          <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3"><br>
                          <center>
                              <!--<button class="btn btn-dark" type="reset">Reset</button>-->
                          <!--<button type="button" class="btn btn-dark"> Update <i class='fa fa-floppy-o'></i></button>-->
                        </center><br>
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
    
$('#account_holder').on('focus', function() {
                            if($('#account_holder').val().length==0)
                             $('#account_holder').val('<?php echo $this->session->userdata('full_name'); ?>');
                    });
$('#upi_mob_no').on('focus', function() {
                            if($('#upi_mob_no').val().length==0)
                             $('#upi_mob_no').val('<?php echo $this->session->userdata('mob_no'); ?>');
                    });
$('#account_no').on('focus', function() {
                        
                             $('#account_no').attr('type', 'text'); 
                    });
$('#account_no').on('focusout', function() {
                        
                             $('#account_no').attr('type', 'password'); 
                    });
$('#c_account_no').on('focusout', function() {
                        
                             if($('#c_account_no').val()!=$('#account_no').val())
                            {
                            alert("Account No. Mismatach");
                            $('#account_no').focus();
                            //  $('#account_no').val(" ");
                            //  $('#c_account_no').val(" ");
                                
                            }
                    });
$(document).ready(function(){
                        var ifsc="<?php echo $bank_data['data']->ifsc; ?>"
                        $.ajax({
                         url: "<?php echo base_url().'trainer/get_ifsc_branch?id='; ?>"+ifsc,
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                             if(response.BANK!="")
                             $('#bank_branch').val(response.BANK+" "+response.BRANCH);
                            
                         }
                         
                       });
                    });
                    
$('#ifsc').on('focusout', function() {
                        $.ajax({
                         url: "<?php echo base_url().'trainer/get_ifsc_branch?id='; ?>"+this.value,
                         type: 'get',
                         dataType: 'json',
                         success: function(response){
                             if(response.BANK!="")
                             $('#bank_branch').val(response.BANK+" "+response.BRANCH);
                            
                         }
                         
                       });
                    });
</script>
