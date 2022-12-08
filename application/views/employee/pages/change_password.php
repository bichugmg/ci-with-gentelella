<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Change Password</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>* Indicates Mandatory Fields</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="change_password" data-parsley-validate class="form-horizontal form-label-left" method="post" action="stud_password_data" onsubmit="return validate(this)">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="old_user_pwd">Current Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="password" id="old_user_pwd" name="old_user_pwd" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_pwd">New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="password" id="user_pwd" name="user_pwd" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="c_user_pwd">Confirm Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="c_user_pwd" name="c_user_pwd" class="date-picker form-control" required="required" type="password">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
						              <center><button class="btn btn-dark" type="reset">Reset</button>
                          <button type="submit" class="btn btn-info">Change Password</button></center>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            

        <!-- /page content -->
        <script type="text/javascript">
          function validate()
              {
              var password=document.getElementById('user_pwd');
              var c_password=document.getElementById('c_user_pwd');
                if(password.value!=c_password.value)
                {
                  alert('Password Mismatch.');
                  return false;

                }
                else
                  return true;
              }
        </script>