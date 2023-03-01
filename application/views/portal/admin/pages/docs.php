<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
            <!-- <h1><b>Add Student</b></h1> -->
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('app/home'); ?>">Home </a></li>
                  <li class="breadcrumb-item active">Documents</li>
                </ol>
            </div>
        </div><!-- /.container-fluid -->
    </section> 
    <section class="content">
      <div class="container-fluid">
        <div class="card">
        <div class="card-body">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d1"  class="btn btn-info">Document 1 </button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d2"  class="btn btn-info">Document 2</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d3"  class="btn btn-info">Document 3</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d4"  class="btn btn-info">Document 4</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d5"  class="btn btn-info">Document 5</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d6"  class="btn btn-info">Document 6</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div><div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d7"  class="btn btn-info">Document 7</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div><div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <div class="info-box-content">
                <button name="d1" id="d8"  class="btn btn-info">Document 8</button>
              </div>
            </div>
            <!-- /.info-box -->
          </div>

</div>
</div>
</div>
</div>
<div class="modal fade" id="modal-secondary">
  <div class="modal-dialog">
    <div class="modal-content bg-secondary">
      <div class="modal-header">
        <h4 class="modal-title">Upload Document</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method='post' action='docs_upload' enctype='multipart/form-data'>

          <input type='file' name='file' > <br/><br>
          <label for="from">Valid From*</label><input required type='date' id="from" name='from' class="form-control" style="width: min-content;"> <br/><br/>
          <label for="from">Valid To*</label><input required type='date' id="to" name='to' class="form-control" style="width: min-content;"> <br/><br/>
          <input type='text' name='filename' hidden id="filename">
          <input type='submit' value='Upload' name='upload' />
         </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

          <!-- /.col -->
          
</div>
          <!-- /.col -->