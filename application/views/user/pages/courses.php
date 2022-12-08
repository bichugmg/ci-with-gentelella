<style type="text/css">
    body{
        width: 100% !important;
    }
    .container{
        width: 100% !important;
    }
    @media (min-width: 768px) {
  .collapse.dont-collapse-sm {
    display: block;
    height: auto !important;
    visibility: visible;
  }

  @media (max-width: 991px){
        .blog_right_sidebar {
            margin-top: 0px !important;
        }
    }

    .owl-carousel .owl-dots {
      display: block !important;
      text-align: center; 
  display: none !important;}
    .owl-carousel .owl-dots .owl-dot {
    height: 10px;
    width: 10px;
    background: #d8d8d8;
    border-radius: 17px;
    display: inline-block;
    margin-right: 10px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s; }
    .owl-carousel .owl-dots .owl-dot.active {
      height: 12px;
      width: 12px;
      background: #3e8fc3; }
    }
    @media (max-width: 991px){
        .single-trainer {
            padding-left: 10px;
            padding-right: 10px;
            margin-right: 0px !important;
            margin-left: 0px !important;
        }
    }
    .single-trainer{
        cursor: pointer;
    }
    #pagei a,strong {
        position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #8a8a8a;
  border: none;
  font-weight: 400;
    }   

    #pagei strong{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }

    #pagei a:hover{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }

    #pagei2 a,strong {
        position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #8a8a8a;
  border: none;
  font-weight: 400;
    }   

    #pagei2 strong{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }

    #pagei2 a:hover{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }
    .hideRule { display: none !important; }
    .showRule { display: flex !important; }

    .single-trainer .price {
    position: absolute;
    top: 110px;
    right: 15px;
    z-index: 2;
    color: #ffffff;
    display: inline-block;
    /*height: 45px;*/
    line-height: 45px;
    /*width: 45px;*/
    padding: 5px;
    text-align: center;
    border-radius: 50px;
    background: #3e8fc3;
    font-family: "Rubik", sans-serif;
    font-weight: 500;
    font-size: 20px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s; }
    .single-trainer .price img {
      margin-top: -8px;
      -webkit-transition: all 0.3s ease 0s;
      -moz-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s; }
      .single-trainer:hover .price {
      background: #002347;
      color: #3e8fc3; }
      @media (max-width: 991px){
        .single-trainer .price {
            position: absolute;
            top: 90px;
            right: 15px;
        }
        }
</style>

<section class="banner_area">
    <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Courses</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================course Area =================-->
    <section class="blog_area section_gap" style="padding: 50px 0 !important;">
        <div class="container" style="margin-top: 10px;">

            <div class="main_title">
                          <h2 class="mb-3">Popular Courses</h2>
                          <p>
                            <!--Replenish man have thing gathering lights yielding shall you-->
                          </p>
                        </div>

            <div class="row" id="scrollA">
                            <div class="owl-carousel active_t_course">
                            


<?php foreach ($p_courses as $course): ?>


                              <div class="single-trainer" val="<?php echo $course['url_name']; ?>">
                                <div class="thumb d-flex justify-content-sm-center">
                                  <img class="img-fluid" src="<?php echo base_url().$course['img']; ?>" alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                     <span class="price">&#8377; <?php echo $course['fee']; ?></span>
                                  <h4 style="min-height:80px;"><?php echo $course['course_name']; ?></h4>
                                  <p class="designation"><?php echo $course['category']; ?></p>
                                 <!--  <div class="mb-4">
                                    <p>
                                    </p>
                                  </div> -->
                                  <!-- <div class="align-items-center justify-content-center d-flex">
                                    <a ><i class="ti-facebook"></i></a>
                                    <a ><i class="ti-twitter"></i></a>
                                    <a ><i class="ti-linkedin"></i></a>
                                    <a ><i class="ti-pinterest"></i></a>
                                  </div> -->
                                </div>
                              </div>

<?php endforeach ?>

                              

                              <!-- <div class="col-lg-3 col-md-6 col-sm-12 single-trainer"> -->
                                
                            </div>
      </div>

            <div class="row">


                <div class="col-lg-9">
                    <div class="blog_left_sidebar" id="course_section">
                        
                      
                    </div>
                    <div class="blog-pagination justify-content-center d-flex" id="pagei"></div>
                    <div class="blog-pagination justify-content-center d-flex" id="pagei2"></div>
                </div>
                <div class="col-lg-3">
                    <div class="blog_right_sidebar" style="margin-top:200px;">
                        <!-- <aside class="single_sidebar_widget search_widget">
                            <form id="blog_search_form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Courses" name="blog_search_name" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="ti-search"></i></button>
                                </span>
                            </div>
                            </form>
                            <div class="br"></div>
                        </aside> -->
                        <!-- <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-github"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get. Boot camps have itssuppor
                                ters andits detractors.</p>
                            <div class="br"></div>
                        </aside> -->
                        <!-- <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
 
                        </aside> -->
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Course Categories</h4>
                          <ul class="list cat-list">
                            <li>
                                <a href="" class="d-flex justify-content-between" id="all">
                                    <p>All</p>
                                    <p><?php echo $total_rows; ?></p>
                                 </a>
                            </li></ul>
                            <ul class="list cat-list mt-3" id="c_cat">
<?php foreach ($courses_category as $category): ?>
                               
                                <li>
                                    <a href="" count="<?php echo $category['category']; ?>" class="d-flex justify-content-between">
                                        <p><?php echo $category['category']; ?></p>
                                        <p><?php echo $category['count']; ?></p>
                                    </a>
                                </li>
 <?php endforeach ?>                                
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <form id="news">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" name="EMAIL" class="form-control" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" required="" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">

                                    <input type="submit" name="" value="submit" id="submit22" hidden="">
                                </div>
                                

                                </form>
                                <a href="" class="bbtns" id="newsButton">Subcribe</a>
                            </div>
                            <div class="info"></div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                       <!--  <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            
                        </aside> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================course Area =================-->

    <script type="text/javascript">
        $(document).ready(function(){
            var g_cat;
          $(document).on('click','.single-trainer',function(){
                document.location.assign( "<?php echo site_url('courses/'); ?>" + $(this).attr('val'));
                 return false;
            });


          $("#all").click(function(e){
             e.preventDefault(); 
             $('#pagei2').removeClass("showRule").addClass("hideRule");
             $('#pagei').removeClass("hideRule").addClass("showRule"); 
                loadPagination(0);
                 $('html, body').animate({
                        scrollTop: $("#scrollA").offset().top
                    }, 1000);
            });

          $('#pagei').on('click','a',function(e){
               e.preventDefault(); 
               var pageno = $(this).attr('data-ci-pagination-page');
               loadPagination(pageno);
               $('html, body').animate({
                    scrollTop: $("#scrollA").offset().top
                }, 1000);
             });

        loadPagination(0);

     // Load pagination
         function loadPagination(pagno){
           $.ajax({
             url: "<?php echo base_url().'course/courses_all/'; ?>"+pagno,
             type: 'get',
             dataType: 'json',
             success: function(response){
                // alert(response);
                $('#pagei').html(response.pagination);
                // createTable(response.result,response.row);
                $('#course_section').html(response.result);
             }
           });
         }


         $('#c_cat').on('click','a',function(e){
           e.preventDefault(); 
           $('#pagei').removeClass("showRule").addClass("hideRule");
           $('#pagei2').removeClass("hideRule").addClass("showRule"); 
           g_cat = $(this).attr('count');
           loadPagination2(0,g_cat);
           $('html, body').animate({
                scrollTop: $("#scrollA").offset().top
            }, 1000);
         });


         $('#pagei2').on('click','a',function(e){
           e.preventDefault(); 
           var pageno = $(this).attr('data-ci-pagination-page');
           loadPagination2(pageno,g_cat);
           $('html, body').animate({
                scrollTop: $("#scrollA").offset().top
            }, 1000);
         });

         function loadPagination2(pagno,cat){
          cat = encodeURIComponent(cat);
           $.ajax({
             url: "<?php echo base_url().'course/courses_cat/'; ?>"+cat+"/"+pagno,
             type: 'get',
             dataType: 'json',
             success: function(response){
                // alert(response);
                $('#pagei2').html(response.pagination);
                // createTable(response.result,response.row);
                $('#course_section').html(response.result);
                // echo json_encode($data);
             }
           });
         }


          $('#newsButton').click(function(e) {
            $('#submit22').trigger('click');
            e.preventDefault(); 
        });


        });

    </script>