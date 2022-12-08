<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Insert Study Materials & Question Papers</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" method="post" action="sm_qp_data" enctype="multipart/form-data" autocomplete="off">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="type">Type <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                              <br>
                            <p>Study Material 
                            <input type="radio" name="type" id="sm" value="study" required /> &nbsp;&nbsp;&nbsp; Question Paper
                            <input type="radio" name="type" id="qp" value="question" />
                          </div>
                        </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="category">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="category" required="required">
                            <option value=""> Select Category </option>
                            <?php foreach ($downloads_categories as $data): ?>
                              <option value="<?php echo $data['category'] ; ?>"><?php echo $data['category'] ; ?></option>


                              <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="title" name="title" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="url">URL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="url" name="url" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <br>
                          <center><button class="btn btn-dark" type="reset">Reset</button>
                          <button type="submit" class="btn btn-info"> Save <i class='fa fa-floppy-o'></i></button>
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