<!-- page content -->









<!--sign in modal start-->
<div class="modal fade" id="myModal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        
        <h6 >Change Status</h4></span></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal " name='change_status'  action="<?php echo base_url('employee/change_status');?>" method="POST">
<fieldset>


<!-- Text input-->
<input type="hidden" name="mid" id="mid">
<input type="hidden" name="up_by" id="up_by" value="<?php echo $uname;?>">
<div class="form-group">
    <label for="status">Status &nbsp &nbsp</label>
  <select name ="status" id="status" value=" 2"> 
  <option id="o1" value= "0" >Pending</option>
  <option id="o2" value= "1" >Selected</option>
    <option id="o3" value= "2" >Rejected</option>
      <option id="o4" value= "3" >Future reference</option></select></div><div>
       <label  for="remark"> Remark &nbsp </label><textarea type="textarea" style="width:125px;" id="remark" name="remark"  ></textarea></div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"><b>Cancel</b></button>
        <button type="submit" class="btn btn-primary fa fa-check" style="background-color:lightblue; color:black;">&nbsp<b>Save</b></button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<div class="modal fade" id="myModal2" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        
        <h6 >Aye you sure ?</h4></span></h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal " name='change_status'  action="<?php echo base_url('employee/delete_job_app');?>" method="POST">
<fieldset>


<!-- Text input-->
<input type="hidden" name="m2id" id="m2id">
<div>
    <lable> The following entry will be permanently deleted. You can't undo this action</lable><br><br>
<label id="m_name"> </label><br>
<lable id="pos"></lable>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"><b>Cancel</b></button>
        <button type="submit" class="btn btn-primary fa fa-trash" style="background-color:lightblue; color:black;">&nbsp<b>Delete</b></button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Job Applications</h3>
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
                              <a href="apply_leave" id ="save" style="display:none"><button type="button" class="btn btn-info btn-sm">Save Changes</button></a>
                            </div>
                  </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="overflow-x:scroll;">
                      <table id="datatable-responsive" class="table  table-striped table-bordered">
                      <thead align="center">
                        <tr>
                          <th>Sl No.</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Mobile</th>
                                <th>Place</th>
                                <th class"sortable ">Post</th>
                                <th>Applied On</th>
                                <th>Qualification</th>
                                <th>Resume</th>
                                <th>status</th>
                                <th>Remark</th>
                                <th>Updated by</th>
                                <th style="display:none;"></th>
                                
                                
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $i=0;
                        foreach ($res as $app) {
                          $i++;
                          ?>
                          <tr align="center" >
                          <td data-title="<?=$this->lang->line('slno')?>" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="Referral ID"  style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['full-name']; ?>
                                    </td>
                                    <td data-title="Name of Student" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['your-email']; ?>
                                        <a href="javascript:;" onclick="cpy(<?php echo "'".$app['your-email']."'";?>);"><i class="fa fa-copy"></i></a>
                                    </td>
                                    <td data-title="Class" style="padding-right:50px;padding-left:4px;">
                                       <?php echo $app['mobile']; ?>
                                        <a href="https://api.whatsapp.com/send?phone=<?php echo '91'.$app['mobile'];?>"  target="_blank" >
                                            <i class="fa fa-whatsapp"></i>
                                            </a>
                                    </td>
                                    <td data-title="Course Prefered" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['district']; ?>
                                    </td>
                                    <td data-title="Name of Parent" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['position']; ?>
                                    </td>
                                    <td data-title="Notes" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['applied_on']; ?>
                                    </td>
                                     <td data-title="Last Updated By" style="padding-right:4px;padding-left:4px;">
                                        <?php echo $app['qualification']; ?>
                                    </td>
                                    <td >
                                        <a href="<?php echo base_url().'assets/users/careers/resume/'.str_replace(' ','_',$app['resume']); ?>.pdf" target="_blank" class"fa fa-pencil"><i class="fa fa-eye" aria-hidden="true">view</i></a>
                                    </td>     
                                    
                                    <td data-title="Current Status" >
                                        <lable style="display:none"></lable>
                                        <?php
                                        if($app['status']==0)
                                            echo"<span style='color:orange;'><b>Pending</b></span>";
                                        else if($app['status']==1)
                                            echo"<span style='color:green;'><b>Selected</b></span>";
                                        else if($app['status']==2)
                                            echo"<span style='color:red;'><b>Rejected</b></span>";
                                        else if($app['status']==3)
                                            echo"<span style='color:yellow;'><b>Future Reference</b></span>";
                                           
                                        ?><a href="javascript:;" onclick="fun1(<?php echo $app['id'].','.$app['status'];?>);" class="fa fa-pencil">edit</a>

<!--                                        <select  class="status" id="status<php echo $i;?>" value="<?php echo $app['status'];?>" style="background-color:php switch ($app['status']) {-->
<!--    case 0:-->
<!--        echo "orange";-->
<!--        break;-->
<!--    case 1:-->
<!--        echo "green";-->
<!--        break;-->
<!--    case 2:-->
<!--        echo "red";-->
<!--        break;-->
<!--    case 3:-->
<!--        echo "yellow";-->
<!--        break;-->
<!--}?>"-->
                                        
                                        
<!--                                        onchange="ch_status(this.id)">-->
<!--                                        <option  value="0"><span style='color:orange;'><b>Pending</b></span></option>-->
<!--                                        <option value="1"><span style='color:green;'><b>Selected</b></span></option>-->
<!--                                        <option value="2"><span style='color:red;'><b>Rejected</b></span></option>-->
<!--                                        <option value="3"><span style='color:yellow;'><b>future reference</b></span></option>-->
<!--                                        </select>-->
                                    </td>
                                     <td data-title="Notes">
                                         <?php  echo $app['remark']; ?>
                                       
                    
                                    </td>
                                    <td data-title="Notes">
                                        <?php if($app['updated_by']!='no_update')
                                        echo $app['updated_by']; ?>
                                    </td data-title="Notes">
                                    <td><a href="javascript:;" onclick="delete_entry(<?php echo $app['id'].",'".$app['full-name']."','".$app['position']."'";?>);" class="fa fa-trash">Delete</a></td>
                                                     
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
    
    
    function delete_entry(id,name,pos){
       
        document.getElementById("m2id").value=id;
        document.getElementById("m_name").innerHTML="Name   :   "+name;
        document.getElementById("pos").innerHTML="Post   :   "+pos;
        $('#myModal2').modal("show");
   
    }
    
    
    
    
    
function fun1(id,st) {
    document.getElementById("mid").value=id;
    switch (st) {
  case 0:
    document.getElementById("o1").selected = true;
    break;
  case 1:
    document.getElementById("o2").selected = true;
    break;
  case 2:
     document.getElementById("o3").selected = true;
    break;
  case 3:
    document.getElementById("o4").selected = true;
    break;
  
}


   
    

    $('#myModal').modal("show");
    
}






function cpy(mail) {
    // Create new element
   var el = document.createElement('textarea');
   el.value = mail;
   el.setAttribute('readonly', '');
   el.style = {position: 'absolute', left: '-9999px'};
   document.body.appendChild(el);
   el.select();
   document.execCommand('copy');
   document.body.removeChild(el);
}
   
</script>
        <!-- /page content -->