<?php
    {
    echo '<title>'.$post['title'].'</title>';
    echo '<meta name="keywords" content="'.$post['meta_keywords'].'">';
    echo '<meta name="description" content="'.$post['meta_description'].'">';
    // echo '<meta property="og:url" content="'.base_url().$post['url_title'].'">';
    // echo '<meta property="og:type" content="'.$post['og_type_content'].'">';
    // echo '<meta property="og:title" content="'.$post['title'].'">';
    // echo '<meta property="og:description" content="'.$post['og_description_content'].'">';
    // echo '<meta property="og:image" content="'.base_url().$post['img'].'">';
    
    }
    
    ?>
<style type="text/css">
    #pagei a,strong{
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
    
    p {
       text-align: justify;
    }
</style>
 <!--================Home Banner Area =================-->
 <section class="banner_area">
     <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <h2><?php echo $post['title']; ?></h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a href="<?php echo base_url();?>blog">Blog</a>
                  <a>Blog Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap" style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo base_url().$post['img']; ?>" alt="" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#"><?php echo $post['author']; ?><i class="ti-user"></i></a></li>
                                    <li><a href="#"><?php echo $post['created_at']; ?><i class="ti-calendar"></i></a></li>
                                    <!--<li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>-->
                                    <!--<li><a href="#">06 Comments<i class="ti-comment"></i></a></li>-->
                                </ul>
                                <!--<ul class="social-links">-->
                                <!--    <li><a href="#"><i class="ti-facebook"></i></a></li>-->
                                <!--    <li><a href="#"><i class="ti-twitter"></i></a></li>-->
                                <!--    <li><a href="#"><i class="ti-github"></i></a></li>-->
                                <!--    <li><a href="#"><i class="ti-linkedin"></i></a></li>-->
                                <!--</ul>-->
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $post['title']; ?></h2>
                                   <p><?php echo $post['body']; ?></p>
                        </div>
                        <div class="col-lg-12">
                            <!-- <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                            </div> -->
                            <div class="row">
                                <!-- <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div> -->
                                <div class="col-lg-12">
                                   <!--<p style="text-align: justify;text-justify: inter-word;"><?php echo $post['body']; ?></p>-->
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="text-white ti-arrow-left"></i></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="text-white ti-arrow-right"></i></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="comments-area" id="comments-area">
                       <h4><?php echo $total_rows." Comments"; ?></h4>

        <div id="comment_section"> 
        </div>             
                <div class="blog-pagination justify-content-center d-flex" id="pagei"></div>        
                       
                    </div>
                    <div class="comment-form" id="comment-form11">
                        <h4>Leave a Reply</h4>
                        <form id="commentform">
                            <!-- <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div> -->
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $post_id; ?>">
                            <input  type="submit" name="" value="Post Comment" class="primary-btn" style="border: none;">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form id="blog_search_form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts" name="blog_search_name" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="ti-search"></i></button>
                                </span>
                            </div>
                            </form><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
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
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
 <?php foreach ($popular_post as $post): ?>                           
                            <div class="media post_item">
                                <img src="<?php echo base_url().$post['img']; ?>" alt="post" style="height:60px;width: 100px;">
                                <div class="media-body">
                                    <a href="<?php echo site_url('blog/view/post/').$post['id']; ?>">
                                        <h3><?php echo $post['title']; ?></h3>
                                    </a>
                                    <p><?php echo $post['created_at']; ?></p>
                                </div>
                            </div>
<?php endforeach ?>                             
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
<?php foreach ($posts_category as $category): ?>
                               
                                <li>
                                    <a href="<?php echo site_url('blog/category/cat/').$category['category'].'/'; ?>" class="d-flex justify-content-between">
                                        <p><?php echo $category['category']; ?></p>
                                        <p><?php echo $category['count']; ?></p>
                                    </a>
                                </li>
 <?php endforeach ?>                                
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <!--news letter-->
                        <!--<aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside> -->
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <?php foreach ($posts_category as $category): ?>
  
                                <li><a href="<?php echo site_url('blog/category/cat/').$category['category'].'/'; ?>"><?php echo $category['category']; ?></a></li>
                                
                                <?php endforeach ?> 
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

     <script type="text/javascript">
        $(document).ready(function(){
          $('#blog_search_form').submit( function() {
            document.location.assign( "<?php echo site_url('blog/search/tag/'); ?>" + $("input[name=blog_search_name]").val() + "/");
          return false;
          });


          $("#commentform").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                // alert(form.serialize());
                $.ajax({
                       type: "POST",
                       url: "<?php echo base_url();?>blog/post_comment",
                       data: form.serialize(), // serializes the form's elements.
                       success: function(data)
                       {
                        alert(data);
                        $("#commentform").trigger("reset");
                        loadPagination(0);
                            // $('#mainresulttbody').html(data);
                            // $('#heading').html($('#college').val());
                            // $('#mainresult').show();
                       }
                     });

            });


          $('#pagei').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });

     loadPagination(0);

     // Load pagination
     function loadPagination(pagno){
       $.ajax({
         url: "<?php echo base_url().'blog/comment/'.$post_id.'/'; ?>"+pagno,
         type: 'get',
         dataType: 'json',
         success: function(response){
            // alert(response);
            $('#pagei').html(response.pagination);
            // createTable(response.result,response.row);
            $('#comment_section').html(response.result);
         }
       });
     }



        });

    </script>