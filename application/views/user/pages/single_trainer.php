<section class="banner_area">
    <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Our Team</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a href="<?php echo base_url();?>course">Our Team</a>
                  <a ><?php echo $trainer['name']; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>


 <div class="section_gap">
<div class="container">
    <div class="row">
                            <div class="col-md-4 float-left">
                                <img class="rounded-circle" src="<?php echo base_url();?><?php echo $trainer['image']; ?>" height="200px" width="200px" alt="">
                            </div>
                            <div class="col-md-8 float-left">
                                <h3><?php echo $trainer['name']; ?></h3>
                                <p><?php echo $trainer['designation']; ?></p>
                                <!--<div class="social_icon">-->
                                <!--    <a href="#"><i class="ti-facebook"></i></a>-->
                                <!--    <a href="#"><i class="ti-twitter"></i></a>-->
                                <!--    <a href="#"><i class="ti-github"></i></a>-->
                                <!--    <a href="#"><i class="ti-linkedin"></i></a>-->
                                <!--</div>-->
                                <p><?php echo $trainer['description']; ?></p>
                                <div class="br"></div>
                            </div>
    </div>
</div>
</div>