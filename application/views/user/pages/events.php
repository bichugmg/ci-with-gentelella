
  <section class="banner_area">
<div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Events</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >Events</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--================ Start Events Area =================-->
    <div class="events_area" style="background-color: #ffff;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Upcoming Events</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          
<?php foreach ($events as $event): ?>
          <div class="col-lg-4 col-md-4">
            <div class="single_event position-relative">
              <div class="event_thumb" style="height : 400px;">
                <img src="<?php echo base_url().$event['img'];?>" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><?php echo $event['date']; ?></div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> <?php echo $event['time']; ?>
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> <?php echo $event['location']; ?>
                    </p>
                  </div>
                </div>
                <p>
                  <?php echo $event['description']; ?>
                </p>
                <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
              </div>
            </div>
          </div>
<?php endforeach ?>

         
        </div>
      </div>
    </div>
    <!--================ End Events Area =================-->