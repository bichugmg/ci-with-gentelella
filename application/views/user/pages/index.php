<head>
    <link href="https://teaminterval.in/" rel="canonical" />
</head>
<!-- <?php foreach ($banner as $ban): ?>
<?php $ban;?>
<?php endforeach ?> -->
<!--================ Start Home Banner Area =================-->
<style type="text/css">

  .home_banner_area {
    z-index: 1;
    min-height: 800px;
    position: relative;
}

  .noti{
    padding-top: 130px;
    padding-bottom: 130px;
  }
  .blog_right_sidebar {
    height: 100%;
  }
  .table-responsive {
    max-height: 550px;
}

 .mdi-36px {
     font-size: 39px;
     margin-right: 10px
 }


 .btn-store {
  color: #777777;
  min-width: 254px;
  padding: 12px 20px !important;
  border-color: #dddddd !important;
}

.btn-store:focus, 
.btn-store:hover {
  color: #ffffff !important;
  background-color: #168eea;
  border-color: #168eea !important;
}

.btn-store .btn-label, 
.btn-store .btn-caption {
  display: block;
  text-align: left;
  line-height: 1;
}

.btn-store .btn-caption {
  font-size: 24px;
}

.dwn:hover{
  background-color: #3e8fc3;
  border-color: #3e8fc3; 
}

  @media (max-width: 991px){
        .noti{
          padding-top: 10px;
        }
        .blog_right_sidebar {
            margin-top: 0px !important;
        }

        .padding{
          padding: 0px !important;
        }
    }
</style>

    <section class="home_banner_area" style="background: url(<?php echo base_url().$banner;?>) no-repeat center;background-size: cover;">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-left">
                <!--<p class="text-uppercase" style="color:white;">-->
                <!--  World's Fastest Growing Individual Tuition Concept-->
                <!--</p>-->
                <!--<h2 class="text-uppercase mt-4 mb-5" style="color:white;">-->
                <!--  Break for a Change-->
                <!--</h2>-->

                <h1 class="text-uppercase mt-4 mb-5" style="color:white;">
                  Best Home and Online Individual Tuition Classes<br>for K-12 students
                </h1>
                <p style="color:white;">
                  World's Fastest Growing Individual Tuition Concept <br> Break for a Change
                </p>
                <div>
                  <a href="<?php echo base_url();?>about" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                  <a href="<?php echo base_url();?>courses" class="primary-btn ml-sm-3 ml-0">courses</a>
                </div>
                
                 <!-- <div style="padding-right:80px";>
                  <p style="justify;">
                 Interval a home tutor is able to give personalized teaching and making a good bond with students then results in easy learning. online tutor using audio, video calls, and whiteboarding tools where both student and teacher are able to interact in real-time.
              </p>
               </div>-->
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


 <!--<div class="page-content page-container" id="page-content">-->
 <!--    <div class="padding" style="padding: 30px;">-->
 <!--        <div class="row container d-flex">-->
 <!--         <div class="template-demo mt-2">-->

 <!--          <button class="btn btn-outline-dark btn-icon-text dwn"> <i class="fa fa-apple btn-icon-prepend mdi-36px"></i> <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Available on the</small> App Store </span> </button>-->

 <!--           <button class="btn btn-outline-dark btn-icon-text dwn"> <i class="fa fa-android btn-icon-prepend mdi-36px"></i> <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Get it on the</small> Google Play </span> </button> -->
 <!--         </div>-->
 <!--        </div>-->
 <!--    </div>-->
 <!--</div>-->

  
    <!--================ End Home Banner Area =================-->
    <!--================ Start Feature Area =================-->
    <div class="row" style="
    margin-right: 0px;">
  <div class="col-lg-9">
    
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Key Features</h2>
              <p>
                Change is the end result of all true learning.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Top Trainers</h4>
                <p style="text-align : justify;">
                  We personally mould every Trainer through 10+ Training Sessions.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2"> One-to-One Sessions</h4>
                <p style="text-align : justify;">
                  Pupils and Trainers interact each other in Person - Great for building Rapport.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scheduled Timings</h4>
                <p style="text-align : justify;">
                  Lessons are pre-scheduled, So Students can study and prepare accordingly.
                </p>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
    </section>


  </div>

  <div class="col-lg-3 noti">
    <div class="blog_right_sidebar ">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Notifications</h4>
                            
                            <table class="table table-responsive">
                              <thead>
                              </thead>
                              <tbody>
                                <?php foreach ($notification as $noti): ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $noti['url']; ?>" target="_blank"><?php echo $noti['title']; ?></a><?php if($noti['new']==1) {?><img src="<?php echo base_url();?>assets/admin/images/new.gif" alt="" /><?php }?>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                              </tbody>
                            </table>
                          
                            
                        </aside>
                        
                    </div>
  </div>
</div>
    <!--================ End Feature Area =================-->






     <div class="section_gap registration_area" style="padding: 60px 0; margin-bottom: 100px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <!-- <div class="col-lg-12">
                <h1 class="mb-3">Register Now</h1>
                <p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>
              </div> -->
              <div class="col clockinner1 clockinner" >
                <h1 class="days counter-count"><?php echo $counter['years']; ?></h1><br>
                <span class="smalltext">Years</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours counter-count">
                <!--<?php $query = $this->db2->query('SELECT * FROM studentgroup WHERE branch_status=1');echo $query->num_rows()+50; ?>-->
                140
                </h1><br>
                <span class="smalltext">Branches</span>
              </div>
              <div class="col clockinner clockinner1" >
                <h1 class="minutes counter-count"><?php $query = $this->db2->query('SELECT * FROM trainer');
                 echo $query->num_rows(); ?></h1><br>
                <span class="smalltext">Trainers</span>
              </div>
              <div class="col clockinner clockinner1" >
                <h1 class="seconds counter-count"><?php $query = $this->db2->query('SELECT * FROM student WHERE active=1'); $stud_num=$query->num_rows()+2000; echo $stud_num; ?></h1><br>
                <span class="smalltext">Students</span>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>









    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Courses</h2>
              <p>
                
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              
<?php foreach ($p_courses as $course): ?>


              <div class="single_course" val="<?php echo $course['url_name']; ?>" style="cursor:pointer;">
                <div class="course_head">
                  <img class="img-fluid" src="<?php echo base_url().$course['img']; ?>" alt="" />
                </div>
                <div class="course_content">
                  <!--<span class="price">&#8377; <?php echo $course['fee']; ?></span>-->
                  <span class="tag mb-4 d-inline-block"><?php echo $course['category']; ?></span>
                  <h4 class="mb-3" style="height:50px; overflow: hidden;">
                    <a href="course-details.html"><?php echo $course['course_name']; ?></a>
                  </h4>
                  <p style="height:70px; overflow: hidden;text-align: justify;">
                    <?php echo $course['slug']; ?>
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <!--<div class="authr_meta">-->
                    <!--  <img src="<?php echo base_url();?>assets/users/img/courses/author3.png" alt="" />-->
                    <!--  <span class="d-inline-block ml-2"><?php echo $course['author']; ?></span>-->
                    <!--</div>-->
                    <!--<div class="mt-lg-0 mt-3">-->
                    <!--  <span class="meta_info mr-4">-->
                    <!--    <a href="#"> <i class="ti-user mr-2"></i>25 </a>-->
                    <!--  </span>-->
                    <!--  <span class="meta_info"-->
                    <!--    ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span-->
                    <!--  >-->
                    <!--</div>-->
                  </div>
                </div>
              </div>
<?php endforeach ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area" style="background-image: url('http://teaminterval.in/assets/users/img/demo.jpg');background-repeat: no-repeat;background-size:cover;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3" style="color:#002347;background-color:white;">Book Free Demo Class</h1>
    <!--            <p style="color:#4c72b0;-webkit-text-stroke: 0.25px white;-->
    <!---webkit-text-fill-color: #4c72b0;">-->
                    <!--<p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>-->
                <p  style="background-color:white; color:#002347;">We are here not just to teach, but to influence an entire generation.
                Our Online and Home Tuitions will open up new doors for your child.
                We’ll turn the Mirrors into Windows!</p>
              </div>
              <!-- <div class="col clockinner1 clockinner">
                <h1 class="days">150</h1><br>
                <span class="smalltext">Years</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1><br>
                <span class="smalltext">Trainers</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">200000</h1><br>
                <span class="smalltext">Students</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">100%</h1><br>
                <span class="smalltext">Success Rate</span>
              </div> -->
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Demo Class for Free</h3>
              <p>It is high time for learning</p>
              <form
                class="form_area"
                id="demoForm1"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                    <input
                      name="phone"
                      placeholder="Your Phone Number"
                      required=""
                      type="number"
                    />
                    <select id="class" name="class" class="form-control select2" style="border: none;border-top: 1px solid #ced4da73;margin-top:10px;" required>
                        <option value="">Select Class</option>
                        <option value="LKG">LKG</option>
                        <option value="UKG">UKG</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select id="district" class="form-control select2" style="border: none;border-top: 1px solid #ced4da73;margin-top:10px;" required>
                        <option value="">Select District</option>
                        <?php 
                        foreach($district as $d):?>
                            <option value="<?php echo $d['district_id']; ?>"><?php echo $d['district_name'];?></option>
                        <?php endforeach ?>
                    </select>
                    <select id="branch_id" name="branch_id" class="form-control select2" style="border: none;border-top: 1px solid #ced4da73;margin-top:10px;" required>
                        <option value="">Select Branch</option>
                    </select>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="primary-btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Team</h2>
              <p>
                "Great things in business are never done by one person."
              </p>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="owl-carousel active_trainer">
        


        <?php foreach ($trainers as $trainer): ?>


          <div class="single-trainer" val="<?php echo $trainer['id']; ?>" style="cursor:pointer;">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="<?php echo base_url().$trainer['image'];?>" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4><?php echo $trainer['name']; ?></h4>
              <p class="designation"><?php echo $trainer['designation']; ?></p>
              <div class="mb-4">
                <p style="height:100px; overflow: hidden;">
                  <?php echo $trainer['description']; ?>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/<?php echo $trainer['facebook']; ?>"><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
                <a href="https://www.instagram.com/<?php echo $trainer['instagram']; ?>" target="_blank"><i class="ti-instagram"></i></a>
              </div>
            </div>
          </div>

          <?php endforeach ?>

          

          <!-- <div class="col-lg-3 col-md-6 col-sm-12 single-trainer"> -->
            
        </div>
      </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->

    <!--================ Start Events Area =================-->
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Upcoming Events</h2>
              <p>
                <!--Replenish man have thing gathering lights yielding shall you-->
              </p>
            </div>
          </div>
        </div>
        <div class="row">
         
<?php foreach ($events as $event): ?>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb" style="height : 400px;">
                <img src="<?php echo base_url().$event['img'];?>"  alt="" style="max-width: 100%; max-height: 100%;"  />
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
          

          <div class="col-lg-12">
            <div class="text-center pt-lg-5 pt-3">
              <a href="<?php echo base_url();?>home/events" class="event-link">
                View All Events <img src="<?php echo base_url();?>assets/users/img/next.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Events Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Feedbacks</h2>
              <p>
                <!--Replenish man have thing gathering lights yielding shall you-->
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            
<?php foreach ($testimonials as $testi): ?>

            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="<?php echo base_url().$testi['img']; ?>" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4 style="margin-bottom: 0px;"><?php echo $testi['name']; ?></h4>
                    <p class="designation" style="margin-bottom: 5px;"><?php echo $testi['designation']; ?></p>
                    <p style="text-align : justify; font-size:12px;">
                      <?php echo $testi['testi']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
<?php endforeach ?>

          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
          setTimeout(function() {
       $('#demoClick').trigger('click');
      }, 3000);
      
          
          var $el = $(".table-responsive");
          function anim() {
            var st = $el.scrollTop();
            var sb = $el.prop("scrollHeight")-$el.innerHeight();
            $el.animate({scrollTop: st<sb/2 ? sb : 0}, 20000, anim);
          }
          function stop(){
            $el.stop();
          }
          anim();
          $el.hover(stop, anim);
          $el.on('touchstart touchend', function() {
            $el.stop();
          });


          $("#demoForm1").submit(function(e) {
              e.preventDefault();
              var form = $(this);
              $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>home/book_demo",
                  data: form.serialize(),
                  success: function(data)
                  {
                    alert(data);
                    
                    $("#demoForm1").trigger('reset');
                    gtag('event', 'conversion', {'send_to': 'AW-659576244/Ey-QCLrJ6PcBELSrwboC'});
  
                  }
              });          
          });
          
          
          $(document).on('click','.single-trainer',function(){
                document.location.assign( "<?php echo site_url('home/trainers/'); ?>" + $(this).attr('val'));
                 return false;
            });
    
        $(document).on('click','.single_course',function(){
                document.location.assign( "<?php echo site_url('courses/'); ?>" + $(this).attr('val'));
                 return false;
            });
            
           $('#district').change(function() {
             var dis = $(this).val();
             $.ajax({
                        url:"<?php echo base_url();?>home/fetch_branches",
                        method:"POST",
                        data:{district:dis},
                        success:function(data)
                        {
                            $("#branch_id").html(data); 
                        }
             });
            }); 
            

      });
    </script>
    <script type="text/javascript">
          $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 6000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
        </script>